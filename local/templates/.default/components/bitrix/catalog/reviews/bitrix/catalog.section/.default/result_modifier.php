<? foreach ($arResult['ITEMS'] as $key => $item) {


    $doctor = \Realweb\Site\Site::getPropValue('DOCTOR', $arParams["IBLOCK_ID"], $item['ID']);

    if (!empty($doctor[0]['VALUE'])) {


        $res = CIBlockElement::GetByID($doctor[0]['VALUE']);
        if ($ar_res = $res->GetNext()) {

            $doctor = ['ID' => $ar_res['ID'], 'NAME' => $ar_res['NAME'], 'CODE' => $ar_res['CODE'], 'PICTURE' => $ar_res['DETAIL_PICTURE']];
            $doctors_iblock = $ar_res['IBLOCK_ID'];
            $doctor['POSITION'] = \Realweb\Site\Site::getPropValue('POSITION', $doctors_iblock, $ar_res['ID'])[0]['VALUE'];

            $res = CIBlockElement::GetProperty($doctors_iblock, $ar_res['ID'], "sort", "asc", array("CODE" => "WORK_PLACE"));
            while ($ob = $res->GetNext()) {


                $res = CIBlockElement::GetByID($ob['VALUE']);
                if ($ar_res = $res->GetNext()) {

                    $VALUES[$ar_res['CODE']] = $ar_res['NAME'];
                }

            }
            $doctor['WP'] = $VALUES;


            $arResult['ITEMS'][$key]['DOCTOR'] = $doctor;


        }


    }


}
?>