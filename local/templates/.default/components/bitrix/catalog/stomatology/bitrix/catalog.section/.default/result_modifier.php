<?php

$arResult['DESCRIPTION']=str_replace('[[FORM]]','FORM',$arResult['DESCRIPTION']);

$priceSections = CIBlockSection::GetList(['SORT'=>'ASC'], ['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('price_list'), 'UF_SERVICE_GROUP' => $arResult['ID']], false);
$priceList = [];
while($priceSection = $priceSections->GetNext()) {
    $priceSectionId[] = $priceSection['ID'];
    $priceList['NAME'] = $priceSection['NAME'];
}
if ($priceSectionId) {
    $priceLists = CIBlockSection::GetMixedList(
      ['DEPTH_LEVEL' => 'ASC'],
      ['SECTION_ID' => $priceSectionId],
      false,
      ['NAME', 'IBLOCK_SECTION_ID', 'ID', 'DEPTH_LEVEL', 'PROPERTY_PRICE']
    );
    while ($price = $priceLists->GetNext()) {
        if ($price['TYPE'] == 'E') {
            $priceList['ITEMS'][] = $price;
        } else {
            $priceList['SUBSECTION'][$price['ID']]['NAME'] = $price['NAME'];
            $subsectionItems = CIBlockElement::GetList(
              ['SORT' => 'ASC'],
              ['SECTION_ID' => $price['ID']],
              false,
              false,
              ['IBLOCK_ID', 'NAME', 'ID', 'PROPERTY_PRICE']
            );
            while ($subsectionItem = $subsectionItems->GetNext()) {
                $priceList['SUBSECTION'][$price['ID']]['ITEMS'][] = $subsectionItem;
            }
        }
    }
    $arResult['PRICE_LIST'] = $priceList;
}
