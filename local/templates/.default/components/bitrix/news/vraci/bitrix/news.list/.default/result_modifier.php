<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
CModule::IncludeModule("iblock");

foreach ($arResult["ITEMS"] as $key => $arElement) {
    if (!empty($arElement["DETAIL_PICTURE"]["SRC"])) {
        $arFileTmp = CFile::ResizeImageGet(
          $arElement["DETAIL_PICTURE"],
          array("width" => 165, "height" => 165),
          BX_RESIZE_IMAGE_EXACT,
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
foreach ($arResult['ITEMS'] as $id => $doctor) {
    $clinicId = [];
    $reviewsList = CIBlockElement::GetList(['SORT'=>'ASC'], ['PROPERTY_DOCTOR'=>$doctor['ID'], 'ACTIVE'=>'Y'], false, false, ['ID', 'IBLOCK_ID']);
    $arResult['ITEMS'][$id]['REVIEWS_COUNT'] = $reviewsList->SelectedRowsCount();
    foreach ($arResult['ITEMS'][$id]['PROPERTIES']['WORK_PLACE']['VALUE'] as $clinic) {
        $clinicId[] = $clinic;
    }
    $clinicsList = CIBlockElement::GetList(['ID'=>'ASC'], ['ID' => $clinicId], false, false, ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'LIST_PAGE_URL']);

    while ($clinic = $clinicsList->GetNext()) {
        $arResult['ITEMS'][$id]['CLINICS'][] = $clinic;
    }
}