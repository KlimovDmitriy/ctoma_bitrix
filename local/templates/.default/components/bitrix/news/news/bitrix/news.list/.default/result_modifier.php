<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
CModule::IncludeModule("iblock");

foreach ($arResult["ITEMS"] as $key => $arElement) {
    if (!empty($arElement["DETAIL_PICTURE"]["SRC"])) {
        $arFileTmp = CFile::ResizeImageGet(
          $arElement["DETAIL_PICTURE"],
          array("width" => 320, "height" => 320),
          BX_RESIZE_IMAGE_PROPORTIONAL_ALT ,
          true,
          false,
          false,
          99
        );
        $arResult["ITEMS"][$key]["DETAIL_PICTURE"] = array(
          "SRC" => $arFileTmp["src"],
          "WIDTH" => $arFileTmp["width"],
          "HEIGHT" => $arFileTmp["height"],
        );
    }
}
foreach ($arResult['ITEMS'] as $id => $news) {
    $text = preg_replace('/(<[^>]*) style=("[^"]+"|\'[^\']+\')([^>]*>)/i', '$1$3', $news['~DETAIL_TEXT']);
    $text = preg_replace('#(<img(.*?)>)#', '', $text);
    $text = str_replace("&nbsp;", '', $text);
$arResult['ITEMS'][$id]['~DETAIL_TEXT'] = $text;
}