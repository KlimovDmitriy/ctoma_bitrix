<?php

foreach ($arResult['SECTIONS'] as $key => $section) {
    if ($section['UF_SHOW_ON_MAIN'] != 1) {
        unset($arResult['SECTIONS'][$key]);
    }
}
$mainElements = CIBlockElement::GetList(
  ['SORT' => 'ASC'],
  ['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('stomatology'), 'PROPERTY_SHOW_ON_MAIN_VALUE' => 'Да'],
  false,
  false,
  ['ID', 'IBLOCK_ID', 'DETAIL_PAGE_URL', 'NAME', 'DETAIL_PICTURE']
);
while ($mainElement = $mainElements->GetNext()) {
    $arResult['SECTIONS'][] = [
      'SECTION_PAGE_URL' => $mainElement['DETAIL_PAGE_URL'],
      'NAME' => $mainElement['NAME'],
      'PICTURE' => CFile::GetFileArray($mainElement['DETAIL_PICTURE'])->Fetch()
    ];
}
