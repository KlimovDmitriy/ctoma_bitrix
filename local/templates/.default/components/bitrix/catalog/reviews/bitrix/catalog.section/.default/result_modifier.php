<? foreach ($arResult['ITEMS'] as $key => $item) {


    $doctor = \Realweb\Site\Site::getPropValue('DOCTOR', $arParams["IBLOCK_ID"], $item['ID']);

    if (!empty($doctor[0]['VALUE'])) {


        $res = CIBlockElement::GetByID($doctor[0]['VALUE']);
        if ($ar_res = $res->GetNext()) {

            $doctor = ['ID' => $ar_res['ID'], 'NAME' => $ar_res['NAME'], 'CODE' => $ar_res['CODE'], 'PICTURE' => $ar_res['DETAIL_PICTURE']];
            $doctors_iblock = $ar_res['IBLOCK_ID'];
            $doctor['POSITION'] = \Realweb\Site\Site::getPropValue('POSITION', $doctors_iblock, $ar_res['ID'])[0]['VALUE'];

            $res22 = CIBlockElement::GetProperty($doctors_iblock, $ar_res['ID'], "sort", "asc", array("CODE" => "WORK_PLACE"));
            $VALUES = [];
            while ($ob = $res22->GetNext()) {


                $res2 = CIBlockElement::GetByID($ob['VALUE']);
                if ($ar_res2 = $res2->GetNext()) {

                    $VALUES[$ar_res2['CODE']] = $ar_res2['NAME'];
                }

            }
            $doctor['WP'] = $VALUES;


            $arResult['ITEMS'][$key]['DOCTOR'] = $doctor;


        }


    }


}
global $APPLICATION;
$cp = $this->__component;
if (is_object($cp)) {
    $cp->arResult['DESC'] = implode(' ', array_slice(explode(' ', strip_tags($arResult["PREVIEW_TEXT"])), 0, 20));
    $cp->SetResultCacheKeys(array('DESC'));
    $arResult['DESC'] = $cp->arResult['DESC'];
}
?>