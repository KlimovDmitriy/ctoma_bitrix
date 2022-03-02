<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetPageProperty("title", 'Отзыв #'.$arResult['ID'].' от пациента '.$arResult['NAME'].' от '.$arResult['DATE_MODIF'].' о стоматологической клинике «Стома»');
$APPLICATION->SetPageProperty("description", 'Читать отзыв '.$arResult['ID'].' от пациента '.$arResult['NAME'].' от '.$arResult['DATE_MODIF'].'. Мнения посетителей о стоматологических клиниках «СТОМА»');

?>