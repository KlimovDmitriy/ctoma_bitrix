<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");

foreach ($arResult['ITEMS'] as $key => $item) {
    $cls = [];
    //Получаем клиники
    $clinics = $item['PROPERTIES']['CLINICS']['VALUE'];
    foreach ($clinics as $c) {

        $res = CIBlockElement::GetByID($c);
        if ($ar_res = $res->GetNext()) {
            $cls[] = $ar_res;
        }

    }
    $arResult["ITEMS"][$key]['CLINICS'] = $cls;


}

