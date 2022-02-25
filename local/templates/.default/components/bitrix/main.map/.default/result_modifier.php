<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");
/* Собираем карту услуг */
$serviceSections = CIBlockSection::GetList(["SORT" => "ASC"], ['IBLOCK_CODE' => "stomatology"], false, ['NAME', 'ID', 'IBLOCK_ID', 'SECTION_PAGE_URL']);
while ($service = $serviceSections->GetNext()) {
    $arResult['SERVICES'][$service['ID']] = [
      'NAME' => $service['NAME'],
        'URL' => $service['SECTION_PAGE_URL']
    ];
}
$serviceElements = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_CODE' => "stomatology"], false, false, ['NAME', 'ID', 'IBLOCK_ID', 'DETAIL_PAGE_URL', 'IBLOCK_SECTION_ID']);
while ($service = $serviceElements->GetNext()) {
    $arResult['SERVICES'][$service['IBLOCK_SECTION_ID']]['ELEMENTS'][] = [
      'NAME' => $service['NAME'],
      'URL' => $service['DETAIL_PAGE_URL']
    ];
}

/* Собираем клиники */
$clinics = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_CODE' => "clinics"], false, false, ['NAME', 'ID', 'IBLOCK_ID', 'DETAIL_PAGE_URL']);
while ($clinic = $clinics->GetNext()) {
    $arResult['CLINICS'][$clinic['ID']] = [
      'NAME' => $clinic['NAME'],
      'URL' => $clinic['DETAIL_PAGE_URL']
    ];
}

/* Собираем врачей */
$doctors = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_CODE' => "doctors"], false, false, ['NAME', 'ID', 'IBLOCK_ID', 'DETAIL_PAGE_URL']);
while ($doctor = $doctors->GetNext()) {
    $arResult['DOCTORS'][$doctor['ID']]= [
      'NAME' => $doctor['NAME'],
      'URL' => $doctor['DETAIL_PAGE_URL']
    ];
}