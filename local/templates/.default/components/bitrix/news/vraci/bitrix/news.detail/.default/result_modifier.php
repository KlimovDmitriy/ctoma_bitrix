<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");


//    if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) {
//        $arFileTmp = CFile::ResizeImageGet(
//          $arResult["DETAIL_PICTURE"],
//          array("width" => 410, "height" => 520),
//          BX_RESIZE_IMAGE_EXACT,
//          true,
//          false,
//          false,
//          99
//        );
//        $arResult["DETAIL_PICTURE"] = array(
//          "SRC"    => $arFileTmp["src"],
//          "WIDTH"  => $arFileTmp["width"],
//          "HEIGHT" => $arFileTmp["height"],
//        );
//
//    }


foreach ($arResult['PROPERTIES']['WORK_PLACE']['VALUE'] as $clinic) {
    $clinicId[] = $clinic;
}
$clinicsList = CIBlockElement::GetList(['ID'=>'ASC'], ['ID' => $clinicId], false, false, ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'LIST_PAGE_URL']);

while ($clinic = $clinicsList->GetNext()) {
    $arResult['CLINICS'][] = $clinic;
}
$arResult['DOCTOR_POSITION'] = $arResult['PROPERTIES']['POSITION']['VALUE'];

$this->__component->SetResultCacheKeys(['NAME','DOCTOR_POSITION']);