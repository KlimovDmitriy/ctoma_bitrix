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
$this->setFrameMode(true);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];
ob_start();
?>
    <h1 class="service__titleText title_norm width width_norm width_paddingStandart"><? echo $name; ?></h1>
    <div class="serviceDefault content_norm">
        <?php echo $arResult['DETAIL_TEXT']; ?>
        <?php if(!$arResult['PROPERTIES']['HIDE_BUTTON']):?>
            <div class="service__zapisatsa">
                <a href="/make-an-appointment" class="button_red" target="_blank">Записаться</a>
            </div>
        <?php endif; ?>
    </div>

<?php // передаем данные буфера вывода в файл component_epilog.php
$this->__component->SetResultCacheKeys(array("CACHED_TPL"));

$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();

ob_get_clean();
?>