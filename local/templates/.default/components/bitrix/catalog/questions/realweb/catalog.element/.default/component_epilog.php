<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$id = $arResult['DISPLAY_ID'] ?: $arResult['ID'];

$APPLICATION->SetPageProperty("title", 'Вопрос #'.$id .' от '.FormatDateFromDB($arResult["DATE_ACTIVE_FROM"], 'SHORT').' - вопрос-ответ | Группа компаний «СТОМА»');
$APPLICATION->SetPageProperty("description", 'Вопрос #'.$id.' от посетителя, оставленный '.FormatDateFromDB($arResult["DATE_ACTIVE_FROM"], 'SHORT').' в разделе «вопрос-ответ» стоматологии «СТОМА»');

?>