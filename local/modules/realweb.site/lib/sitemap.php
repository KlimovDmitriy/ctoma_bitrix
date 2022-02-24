<?php


namespace Realweb\Site;

use \Bitrix\Seo\SitemapTable;
use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;

class Sitemap
{
    public $arSitemap = array();
    public $IBLOCK = array();
    public $FILES = array();
    public $DOMAIN;
    public $XML_HEADER = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    public $XML_FOOTER = '</urlset>';
    public $XML_HEADER_SITEMAP = '<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    public $XML_FOOTER_SITEMAP = '</sitemapindex>';

    public function __construct()
    {
        global $USER;
        if (!is_object($USER)) {
            $USER = new \CUser();
        }
        if (!Loader::includeModule("seo")) {
            die('error');
        }
        if (!Loader::includeModule("iblock")) {
            die('error');
        }
        Site::definders();
        $sitemaps = SitemapTable::getList()->fetchAll();
        foreach ($sitemaps as $sitemap) {
            $sitemap['SETTINGS'] = unserialize($sitemap['SETTINGS']);
            $this->arSitemap[$sitemap['ID']] = $sitemap;
        }
    }

    public function getFiles($currentDir, $arSitemap)
    {
        $arDirs = \CSeoUtils::getDirStructure("N", $arSitemap['SITE_ID'], $currentDir);
        foreach ($arDirs as $dir) {
            $dirKey = "/" . ltrim($dir['DATA']['ABS_PATH'], "/");
            if ($dir['TYPE'] == 'F') {
                if (!isset($arSitemap['SETTINGS']['FILE'][$dirKey])
                    || $arSitemap['SETTINGS']['FILE'][$dirKey] == 'Y') {
                    if (preg_match($arSitemap['SETTINGS']['FILE_MASK_REGEXP'], $dir['FILE'])) {
                        $pr = 0.1;
                        $cf = 'monthly';

                        if ($dirKey == '/' || $dirKey == '/index.php') {
                            $pr = 1.0;
                            $cf = 'daily';
                        }
                        if ($dirKey == '/novinki/index.php' || $dirKey == '/hits/index.php' || $dirKey == '/brands/index.php' || $dirKey == '/catalog/index.php') {
                            $pr = 0.9;
                            $cf = 'weekly';
                        }


                        $this->FILES[] = array(
                            "URL" => str_replace("index.php", "", $dirKey),
                            "DATE" => date("c", filemtime($_SERVER['DOCUMENT_ROOT'] . $dirKey)),
                            "CF" => $cf,
                            "PRIORITY" => $pr
                        );
                    }
                }
            } else {
                if (!isset($arSitemap['SETTINGS']['DIR'][$dirKey])
                    || $arSitemap['SETTINGS']['DIR'][$dirKey] == 'Y') {
                    $this->getFiles($dir['DATA']['ABS_PATH'], $arSitemap);
                }
            }

        }
    }

    public function getIblockData($arSitemap)
    {
        foreach ($arSitemap['SETTINGS']['IBLOCK_ACTIVE'] as $iblockId => $active) {
            if ($active == 'Y') {
                if ($arSitemap['SETTINGS']['IBLOCK_LIST'][$iblockId] == 'Y') {
                    $rsRes = \CIBlock::GetByID($iblockId);
                    if ($arRes = $rsRes->GetNext()) {
                        $arRes['LIST_PAGE_URL'] = str_replace("#SITE_DIR#", '', $arRes['LIST_PAGE_URL']);
                        $this->IBLOCK[$iblockId][$arRes['LIST_PAGE_URL']] = array(
                            "URL" => $arRes['LIST_PAGE_URL'],
                            "DATE" => date("c", MakeTimeStamp($arRes['TIMESTAMP_X'])),
                        );
                    }
                }
                if ($arSitemap['SETTINGS']['IBLOCK_SECTION'][$iblockId] == 'Y') {
                    $arFilter = array('IBLOCK_ID' => $iblockId, "ACTIVE" => 'Y');
                    $rsSect = \CIBlockSection::GetList(array('left_margin' => 'asc'), $arFilter, false, array("ID", "IBLOCK_ID", "TIMESTAMP_X", 'SECTION_PAGE_URL'));
                    /*Приоритеты для разделов*/
                    $S_Prs = [7 => 0.9, 1 => 0.1, 24 => 0.1, 31 => 0.1, 32 => 0.1];

                    $S_CF = [7 => 'weekly', 1 => 'monthly', 24 => 'monthly', 31 => 'monthly', 32 => 'monthly'];

                    while ($arSect = $rsSect->GetNext()) {
                        $this->IBLOCK[$iblockId][$arSect['SECTION_PAGE_URL']] = array(
                            "URL" => $arSect['SECTION_PAGE_URL'],
                            "DATE" => date("c", MakeTimeStamp($arSect['TIMESTAMP_X'])),
                            "PRIORITY" => $S_Prs[$iblockId],
                            "CF" => $S_CF[$iblockId]
                        );

                    }


                }
                if ($arSitemap['SETTINGS']['IBLOCK_ELEMENT'][$iblockId] == 'Y') {
                    $arFilter = array("IBLOCK_ID" => $iblockId, "ACTIVE" => 'Y');
                    if ($iblockId == IBLOCK_CONTENT_SEO) {
                        $arFilter['PROPERTY_NOINDEX'] = false;
                    }
                    /*Приоритеты для элементов ИБ*/
                    $EL_Prs = [7 => 0.5, 3 => 0.5, 1 => 0.1, 24 => 0.1, 31 => 0.1, 32 => 0.1];

                    $СF_Prs = [7 => 'weekly', 3 => 'weekly', 1 => 'monthly', 24 => 'monthly', 31 => 'monthly', 32 => 'monthly'];

                    $result = \CIBlockElement::GetList(array(), $arFilter, false, false, array("ID", "IBLOCK_ID", "TIMESTAMP_X", 'DETAIL_PAGE_URL'));
                    while ($arElement = $result->GetNext()) {
                        $arElement['DETAIL_PAGE_URL'] = urldecode($arElement['DETAIL_PAGE_URL']);
                        $this->IBLOCK[$iblockId][$arElement['DETAIL_PAGE_URL']] = array(
                            "URL" => $arElement['DETAIL_PAGE_URL'],
                            "DATE" => date("c", MakeTimeStamp($arElement['TIMESTAMP_X'])),
                            "PRIORITY" => $EL_Prs[$iblockId],
                            "CF" => $CF_Prs[$iblockId]
                        );

                    }
                }
            }
        }
    }

    public function createXML($fileName, $arData)
    {
        $xml = $this->XML_HEADER;
        foreach ($arData as $data) {

            $xml .= '<url><loc>' . $this->DOMAIN . $data['URL'] . '</loc><lastmod>' . $data['DATE'] . '</lastmod>';
            if ($data["PRIORITY"]) {
                $xml .= '<priority>' . $data['PRIORITY'] . '</priority>';
            }
            if ($data["CF"]) {
                $xml .= '<changefreq>' . $data['CF'] . '</changefreq>';
            }
            $xml .= '</url>';
        }
        $xml .= $this->XML_FOOTER;
        file_put_contents(Application::getDocumentRoot() . "/" . $fileName, $xml);
    }

    public function createSitemapXML($fileName, $arData, $IBLOCK_ID = 0)
    {
        $xml = $this->XML_HEADER_SITEMAP;
        foreach ($arData as $data) {
            $xml .= '<sitemap><loc>' . $this->DOMAIN . $data['URL'] . '</loc><lastmod>' . $data['DATE'] . '</lastmod></sitemap>';
        }
        $xml .= $this->XML_FOOTER_SITEMAP;
        file_put_contents(Application::getDocumentRoot() . "/" . $fileName, $xml);
    }

    public function generate()
    {
        foreach ($this->arSitemap as $sitemap) {
            $this->getFiles("", $sitemap);
            $this->getIblockData($sitemap);
            $this->DOMAIN = ($sitemap['SETTINGS']['PROTO'] ? "https://" : "http://") . $sitemap['SETTINGS']['DOMAIN'];
            $arXMLFiles = array();
            $arXMLFiles[] = array(
                "URL" => "/" . $sitemap['SETTINGS']['FILENAME_FILES'],
                "DATE" => date("c", time())
            );
            $this->createXML($sitemap['SETTINGS']['FILENAME_FILES'], $this->FILES);
            foreach ($this->IBLOCK as $iblockId => $iblock) {
                $fileName = str_replace("#IBLOCK_ID#", $iblockId, $sitemap['SETTINGS']['FILENAME_IBLOCK']);
                $this->createXML($fileName, $iblock, $iblockId);
                $arXMLFiles[] = array(
                    "URL" => "/" . $fileName,
                    "DATE" => date("c", time())
                );
            }
            $this->createSitemapXML($sitemap['SETTINGS']['FILENAME_INDEX'], $arXMLFiles);
            $this->IBLOCK = array();
            $this->FILES = array();
        }
    }

    public static function agentGenerate()
    {
        $sitemap = new self();

        $sitemap->generate();

        return "\Realweb\Site\Sitemap::agentGenerate();";
    }

}