<?php

use \Realweb\Site\Site;

AddEventHandler("main", "OnPageStart", "onPageStart");
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\PageType', 'GetUserTypeDescription'));
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\YoutubeVideo', 'GetUserTypeDescription'));
AddEventHandler("main", "OnEndBufferContent", array('\Realweb\Site\Webp', 'convertAllToWebp'));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", array("\Realweb\Site\Handlers", "OnAfterIBlockElementAddHandler"));
AddEventHandler("main", "OnEpilog", "OnEpilog");


function onPageStart()
{
    Site::definders();
    //$GLOBALS['arrFilterMainBanner']['PROPERTY_TYPE'] = current(Site::getPropEnumValues(array('IBLOCK_ID' => IBLOCK_CONTENT_MAIN_BANNER, 'XML_ID' => 'main', 'CODE' => 'TYPE')))['ID'];
}

function OnEpilog()
{
    /*Показать 404 для всего где есть ?page*/
    if (strpos($_SERVER['REQUEST_URI'], '?page') != false) {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        CHTTP::SetStatus("404 Not Found");

        include($_SERVER["DOCUMENT_ROOT"].'/404.php');

       exit;
    }

}