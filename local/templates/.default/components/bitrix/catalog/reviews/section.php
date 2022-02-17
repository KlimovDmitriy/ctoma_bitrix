<?php
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "",
    array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "N",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "IBLOCK_TYPE" => "content",
        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE",
        "ELEMENT_SORT_FIELD" => $arParams['ELEMENT_SORT_FIELD'],
        "ELEMENT_SORT_ORDER" => $arParams['ELEMENT_SORT_ORDER']
    ),
    $component
);

?>
