<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");

foreach ($arResult['ITEMS'] as $key => $item) {

echo '<pre>';
print_r($item);
echo '</pre>';
    $dbEl = CIBlockElement::GetByID($item['ID']);
    if ($obEl = $dbEl->GetNextElement()) {
        $arProps[$item['ID']] = $obEl->GetProperties();
        $arResult["ITEMS"][$key]['CLINICS'] = $arProps[$item['ID']]["CLINICS"]["VALUE"];

    }

}

