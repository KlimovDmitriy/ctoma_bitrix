<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



$APPLICATION->SetPageProperty("title", 'Вопрос #'.$arResult['DISPLAY_ID'].' от '.FormatDateFromDB($arResult["DATE_CREATE"], 'SHORT').' - вопрос-ответ | Группа компаний «СТОМА»');
$APPLICATION->SetPageProperty("description", 'Вопрос #'.$arResult['DISPLAY_ID'].' от посетителя, оставленный '.FormatDateFromDB($arResult["DATE_CREATE"], 'SHORT').' в разделе «вопрос-ответ» стоматологии «СТОМА»');

?>