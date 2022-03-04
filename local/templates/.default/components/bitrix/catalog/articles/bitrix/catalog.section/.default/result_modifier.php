<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");

foreach ($arResult["ITEMS"] as $key => $arElement) {

    $dbEl = CIBlockElement::GetByID($arElement['ID']);
    if ($obEl = $dbEl->GetNextElement()) {
        $arProps[$arElement['ID']] = $obEl->GetProperties();
       $arResult["ITEMS"][$key]['PHOTO_AFTER'] = CFile::GetPath($arProps[$arElement['ID']]["PHOTO_AFTER"]["VALUE"]);
    }


}