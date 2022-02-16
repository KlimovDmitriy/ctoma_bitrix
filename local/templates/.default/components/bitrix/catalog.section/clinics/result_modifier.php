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

}


