<?php
use \Realweb\Site\Site;

AddEventHandler("main", "OnPageStart", "onPageStart");
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\PageType', 'GetUserTypeDescription'));
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\YoutubeVideo', 'GetUserTypeDescription'));
AddEventHandler("main", "OnEndBufferContent", array('\Realweb\Site\Webp', 'convertAllToWebp'));
function onPageStart()
{
    Site::definders();
    Global $APPLICATION;
    $current_url = $APPLICATION->GetCurDir();
    if ( $_SERVER['REQUEST_URI'] != strtolower( $_SERVER['REQUEST_URI']) && $current_url != strtolower( $current_url) ) {
        $new_url = str_replace($current_url,'',$_SERVER['REQUEST_URI']);
        header('Location: https://'.$_SERVER['HTTP_HOST'] .
            strtolower($current_url) . $new_url, true, 301);
        exit();
    }
    //$GLOBALS['arrFilterMainBanner']['PROPERTY_TYPE'] = current(Site::getPropEnumValues(array('IBLOCK_ID' => IBLOCK_CONTENT_MAIN_BANNER, 'XML_ID' => 'main', 'CODE' => 'TYPE')))['ID'];
}