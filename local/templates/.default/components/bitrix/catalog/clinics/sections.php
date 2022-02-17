<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="kliniki">

<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
    )
);
?>
<div class="kliniki__container">
    <h1 class="kliniki__title title_grey width width_norm width_paddingStandart">
        <span class="title__br"></span><span class="title__text">Клиники</span><span class="title__br"></span>
    </h1>

<div class="kliniki__content width width_norm width_paddingStandart">
    <div class="rayon_buttons">
        <a href="/clinics/vasileostrovskij-rajon">Василеостровский район</a>
        <a href="/clinics/vyborgskij-rajon">Выборгский район</a>
        <a href="/clinics/kalininskij-rajon">Калининский район</a>
        <a href="/clinics/moskovskij-rajon">Московский район</a>
        <a href="/clinics/petrogradskij-rajon">Петроградский район</a>
        <a href="/clinics/primorskij-rajon">Приморский район</a>
        <a href="/clinics/centralnyj-rajon">Центральный район</a>
    </div>
    <div class="views-element-container">
        <div class="klinikiView">
<?php
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "clinics",
    Array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "N",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => \Realweb\Site\Site::getIblockId('clinics'),
        "IBLOCK_TYPE" => "content",
        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE"
    )
);

?>
        </div>
    </div>
</div>
</div>
</div>

