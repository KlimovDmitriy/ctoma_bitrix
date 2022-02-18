<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");

foreach ($arResult["ITEMS"] as $key => $arElement) {
    if (!empty($arElement["PREVIEW_PICTURE"]["SRC"])) {
        $arFileTmp = CFile::ResizeImageGet(
            $arElement["PREVIEW_PICTURE"],
            array("width" => 250, "height" => 150),
            BX_RESIZE_IMAGE_EXACT,
            true,
            false,
            false,
            99
        );
        $arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = array(
            "SRC"    => $arFileTmp["src"],
            "WIDTH"  => $arFileTmp["width"],
            "HEIGHT" => $arFileTmp["height"],
        );

    }

    $dbEl = CIBlockElement::GetByID($arElement['ID']);
    if ($obEl = $dbEl->GetNextElement()) {
        $arProps[$arElement['ID']] = $obEl->GetProperties();
        $arResult["ITEMS"][$key]['ADDRESS'] = $arProps[$arElement['ID']]["ADDRESS"]["VALUE"];
        $arResult["ITEMS"][$key]['SCHEDULE'] = $arProps[$arElement['ID']]["SCHEDULE"]["VALUE"];
        $arResult["ITEMS"][$key]['CALLTOUCH'] = $arProps[$arElement['ID']]["CALLTOUCH"]["VALUE"];
        $arResult["ITEMS"][$key]['PHONES'] = $arProps[$arElement['ID']]["PHONES"]["VALUE"];
    }
}

