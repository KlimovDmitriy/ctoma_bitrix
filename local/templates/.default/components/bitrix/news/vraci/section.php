<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
CModule::IncludeModule('highloadblock');
global $arrFilter;
const META_HL = 1;
$hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getById(META_HL)->fetch();
$entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
$entityClass = $entity->getDataClass();
$rsData = $entityClass::getList(
  array(
    "select" => array("*"),
    "order" => array("ID" => "ASC"),
    "filter" => array()
  )
);
$terms = [];
while ($r = $rsData->Fetch()) {
    $arH1[$r['UF_XML_ID']] = $r['UF_NAME'];
}

$APPLICATION->SetPageProperty("title", $arH1[$url] . " в Санкт-Петербурге – отзывы и запись на прием онлайн");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty(
  "description",
  "В разделе собраны " . mb_strtolower(
    $arH1[$url]
  ) . " клиник СТОМА. Отзывы, примеры работ. Онлайн-запись на прием. Клиники во всех районах города."
);
?>
<div class="views-element-container contextual-region">
    <?php
    $APPLICATION->IncludeComponent(
      "bitrix:breadcrumb",
      "",
      array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
      )
    );
    ?>
  <div class="doctors__container">
    <h1 class="doctors__title title_grey width width_norm width_paddingStandart">
      <span class="title__text"><?= $arH1[$url] ?></span>
    </h1>
    <div class="doctors__content width width_norm width_paddingStandart">
      <div id="doctorsFilter" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
           class="doctorsFilter">
          <?
          $APPLICATION->IncludeComponent(
            "bitrix:catalog.smart.filter",
            ".default",
            array(
              "COMPONENT_TEMPLATE" => ".default",
              "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
              "IBLOCK_ID" => $arParams["IBLOCK_ID"],
              "SECTION_ID" => "",
              "SECTION_CODE" => "",
              "FILTER_NAME" => $arParams["FILTER_NAME"],
              "HIDE_NOT_AVAILABLE" => "N",
              "TEMPLATE_THEME" => "blue",
              "FILTER_VIEW_MODE" => "horizontal",
              "DISPLAY_ELEMENT_COUNT" => "N",
              "SEF_MODE" => "N",
              "CACHE_TYPE" => "A",
              "CACHE_TIME" => "36000000",
              "CACHE_GROUPS" => "Y",
              "SAVE_IN_SESSION" => "N",
              "INSTANT_RELOAD" => "Y",
              "PAGER_PARAMS_NAME" => "arrPager",
              "PRICE_CODE" => array(
                0 => "BASE",
              ),
              "CONVERT_CURRENCY" => "Y",
              "XML_EXPORT" => "N",
              "SECTION_TITLE" => "-",
              "SECTION_DESCRIPTION" => "-",
              "POPUP_POSITION" => "left",
              "SEF_RULE" => "/personal/filter/#SMART_FILTER_PATH#/apply/",
              "SECTION_CODE_PATH" => "",
              "SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
            ),
            $component
          ); ?>

          <?
          $specialisationId = array_search($url, $specialisationCodes);
          $arrFilter['=PROPERTY_78'][0] = $specialisationId;
          $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "",
            array(
              "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
              "IBLOCK_ID" => $arParams["IBLOCK_ID"],
              "NEWS_COUNT" => $arParams["NEWS_COUNT"],
              "SORT_BY1" => $arParams["SORT_BY1"],
              "SORT_ORDER1" => $arParams["SORT_ORDER1"],
              "SORT_BY2" => $arParams["SORT_BY2"],
              "SORT_ORDER2" => $arParams["SORT_ORDER2"],
              "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
              "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
              "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
              "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
              "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
              "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
              "SET_TITLE" => $arParams["SET_TITLE"],
              "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
              "MESSAGE_404" => $arParams["MESSAGE_404"],
              "SET_STATUS_404" => $arParams["SET_STATUS_404"],
              "SHOW_404" => $arParams["SHOW_404"],
              "FILE_404" => $arParams["FILE_404"],
              "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
              "CACHE_TYPE" => $arParams["CACHE_TYPE"],
              "CACHE_TIME" => $arParams["CACHE_TIME"],
              "CACHE_FILTER" => $arParams["CACHE_FILTER"],
              "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
              "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
              "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
              "PAGER_TITLE" => $arParams["PAGER_TITLE"],
              "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
              "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
              "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
              "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
              "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
              "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
              "PAGER_BASE_LINK" => '/personal/' . $url . '/',
              "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
              "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
              "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
              "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
              "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
              "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
              "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
              "FILTER_NAME" => $arParams["FILTER_NAME"],
              "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
              "CHECK_DATES" => $arParams["CHECK_DATES"],
            ),
            $component
          ); ?>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('.breadcrumb__text').text('<?=  $arH1[$url] ?>');
  })
</script>
<style>
    #work_place {
        flex-basis: auto;
    }

    .doctorsFilter__left {
        flex-basis: 35%;
    }

    .doctorsFilter__right {
        flex-basis: 60%;
    }
</style>