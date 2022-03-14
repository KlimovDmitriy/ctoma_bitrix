
<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"]) {
    $res = CIBlockElement::GetByID($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"]);
    if ($ar_res = $res->GetNext()) {
        $arResult['DOCTOR_INFO'] = $ar_res;
        $arResult['DOCTOR_DETAIL_PICTURE'] = CFile::GetPath($ar_res["DETAIL_PICTURE"]);
    }

    $props=CIBlockElement::GetByID($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"])->GetNextElement()->GetProperties();
    foreach($props["WORK_PLACE"]["VALUE"] as $wp) {
        $res = CIBlockElement::GetByID($wp);
        if($ar_res = $res->GetNext())
            $arResult['DOCTOR_CLINICS'][] = '<a href="'.$ar_res["DETAIL_PAGE_URL"].'">'.$ar_res["NAME"].'</a>';
    }
    $arResult['DOCTOR_POSITION'] = $props['POSITION']['VALUE'];
}


$dateP = new DateTime($arResult['ACTIVE_FROM']);
$arResult['DATE_MODIF'] = $dateP->format('d-m-Y');

$this->__component->SetResultCacheKeys(['NAME','DATE_MODIF']);

?>
