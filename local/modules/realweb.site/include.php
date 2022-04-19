<?php
use \Realweb\Site\Site;

AddEventHandler("main", "OnPageStart", "onPageStart");
AddEventHandler("main", "OnBeforeProlog", "onProlog");
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\PageType', 'GetUserTypeDescription'));
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\YoutubeVideo', 'GetUserTypeDescription'));
AddEventHandler("main", "OnEndBufferContent", array('\Realweb\Site\Webp', 'convertAllToWebp'));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("\Realweb\Site\Handlers", "OnAfterIBlockElementAddHandler"));
function onPageStart()
{
    Site::definders();
    //$GLOBALS['arrFilterMainBanner']['PROPERTY_TYPE'] = current(Site::getPropEnumValues(array('IBLOCK_ID' => IBLOCK_CONTENT_MAIN_BANNER, 'XML_ID' => 'main', 'CODE' => 'TYPE')))['ID'];
}
function onProlog(){
    if (!in_array($_SESSION['SESS_COUNTRY_ID'], array('RU', 'BY', 'KZ'))) {
        die('This site temporary unavailable.');
    }
}
