<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */

/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
$this->setFrameMode(true);

?>

<?php
$arVariables = array();
$isElement = \Realweb\Site\Property\PageType::isElement($arParams["SEF_FOLDER"], $arParams['IBLOCK_ID'], $arVariables);

if ($isElement) {
    $componentPage = 'element';
    $arResult['VARIABLES'] = $arVariables;
    $this->__component->IncludeComponentTemplate($componentPage);
} else {
    \Bitrix\Iblock\Component\Tools::process404("", true, true, true, "");
}
?>

