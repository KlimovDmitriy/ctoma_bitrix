<?php
foreach ($arResult['ITEMS'] as $id => $doctor) {
    $reviewsList = CIBlockElement::GetList(['SORT'=>'ASC'], ['PROPERTY_DOCTOR'=>$doctor['ID'], 'ACTIVE'=>'Y'], false, false, ['ID', 'IBLOCK_ID']);
    $arResult['ITEMS'][$id]['REVIEWS_COUNT'] = $reviewsList->SelectedRowsCount();
}