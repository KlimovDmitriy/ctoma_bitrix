<?php

foreach ($arResult['SECTIONS'] as $key => $section) {
    if ($section['UF_SHOW_ON_MAIN'] != 1) {
        unset($arResult['SECTIONS'][$key]);
    }
}
$arFilter = ['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('stomatology'), 'PROPERTY_SHOW_ON_MAIN_VALUE' => 'Да'];
if ($GLOBALS["clinicFilter"]["UF_CLINICS"]) {
    array_push($arFilter, ['PROPERTY_CLINICS' => $GLOBALS["clinicFilter"]["UF_CLINICS"]]);
}
$mainElements = CIBlockElement::GetList(
  ['SORT' => 'ASC'],
  $arFilter,
  false,
  false,
  ['ID', 'IBLOCK_ID', 'DETAIL_PAGE_URL', 'NAME', 'DETAIL_PICTURE']
);
while ($mainElement = $mainElements->GetNext()) {
    $arResult['SECTIONS'][] = [
      'SECTION_PAGE_URL' => $mainElement['DETAIL_PAGE_URL'],
      'NAME' => $mainElement['NAME'],
      'PICTURE' => CFile::GetFileArray($mainElement['DETAIL_PICTURE'])
    ];
}
