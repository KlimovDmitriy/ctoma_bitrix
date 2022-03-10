
<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"]){
    $props=CIBlockElement::GetByID($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"])->GetNextElement()->GetProperties();

    foreach($props["WORK_PLACE"]["VALUE"] as $analog) {
        $res = CIBlockElement::GetByID($analog);
        if($ar_res = $res->GetNext())
            $arResult['DOCTOR_CLINICS'][] = '<a href="'.$ar_res["LIST_PAGE_URL"].$ar_res["DETAIL_PAGE_URL"].'">'.$ar_res["NAME"].'</a>';
    }
}
$arResult['DOCTOR_POSITION'] = $props['POSITION']['VALUE'];

$doctor_obj = CIBlockElement::GetByID($arResult['PROPERTIES']['DOCTOR']['VALUE']);
$doctor_info = $doctor_obj->GetNext();
$arResult['DOCTOR_DETAIL_PICTURE'] = CFile::GetPath($doctor_info["DETAIL_PICTURE"]);
$arResult['DOCTOR_NAME'] = $doctor_info['NAME'];
$arResult['DOCTOR_URL'] = $doctor_info["DETAIL_PAGE_URL"];

$dateP = new DateTime($arResult['ACTIVE_FROM']);
$arResult['DATE_MODIF'] = $dateP->format('d-m-Y');

$this->__component->SetResultCacheKeys(['DOCTOR_NAME','NAME','DATE_MODIF']);

?>
