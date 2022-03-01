<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetPageProperty("title", $arResult['NAME'].' – пример работы '.$arResult['ID']);
$APPLICATION->SetPageProperty("description", 'Примеры работ специалистов клиники СТОМА – пример '.$arResult['ID'].'. Специалист – '.$arResult['NEWDESC']);

?>