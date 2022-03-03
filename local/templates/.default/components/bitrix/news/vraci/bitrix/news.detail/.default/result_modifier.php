<?php
foreach ($arResult['PROPERTIES']['WORK_PLACE']['VALUE'] as $clinic) {
    $clinicId[] = $clinic;
}
$clinicsList = CIBlockElement::GetList(['ID'=>'ASC'], ['ID' => $clinicId], false, false, ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'LIST_PAGE_URL']);

while ($clinic = $clinicsList->GetNext()) {
    $arResult['CLINICS'][] = $clinic;
}