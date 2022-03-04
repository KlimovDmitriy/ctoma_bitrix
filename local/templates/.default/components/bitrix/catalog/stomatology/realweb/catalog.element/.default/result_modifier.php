<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$arResult['TEXT_PAGE'] = false;
$arResult['REDIRECT'] = "";

$arResult['DETAIL_TEXT']=str_replace('[[FORM]]','FORM',$arResult['DETAIL_TEXT']);


