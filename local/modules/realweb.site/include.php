<?php

use \Realweb\Site\Site;

AddEventHandler("main", "OnPageStart", "onPageStart");
AddEventHandler("main", "OnBeforeProlog", "onProlog");
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\PageType', 'GetUserTypeDescription'));
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('Realweb\Site\Property\YoutubeVideo', 'GetUserTypeDescription'));
AddEventHandler("main", "OnEndBufferContent", array('\Realweb\Site\Webp', 'convertAllToWebp'));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", array("\Realweb\Site\Handlers", "OnAfterIBlockElementAddHandler"));
function onPageStart()
{
    Site::definders();
    //$GLOBALS['arrFilterMainBanner']['PROPERTY_TYPE'] = current(Site::getPropEnumValues(array('IBLOCK_ID' => IBLOCK_CONTENT_MAIN_BANNER, 'XML_ID' => 'main', 'CODE' => 'TYPE')))['ID'];
}

function onProlog()
{
    $ip = $_SERVER['REMOTE_ADDR'];

    $ipInfo = json_decode(file_get_contents("http://ip-api.com/json/{$ip}?fields=status,message,country,countryCode"), true);

    if (isset($ipInfo['country']) && $ipInfo['country'] != 'Russia') {   //print('BLOCKED COUNTRY');

        http_response_code(403);

        die('Forbidden');
    }

}
