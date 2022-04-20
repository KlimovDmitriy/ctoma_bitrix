<?php
global $APPLICATION;

$title = 'Отзывы | Группа компаний «СТОМА»';
$desc = 'Сеть стоматологических клиник «Стома» оказывает полный спектр услуг стоматологии: детская стоматология и для взрослых. 17 клиник в Санкт-Петербурге рядом с метро, телефон для справок: +7 (812) 321-02-01';
if ($_REQUEST['PAGEN_1'] > 0) {

    $title .= ' - страница ' . (int)$_REQUEST['PAGEN_1'];
    $desc .= ' - страница ' . (int)$_REQUEST['PAGEN_1'];
}


/*Показать 404 для всего где есть ?page*/
if (strpos($_SERVER['REQUEST_URI'], 'page') != false) {
    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404", "Y");
    include_once($_SERVER['DOCUMENT_ROOT'].'/404.php');
    //\Bitrix\Iblock\Component\Tools::process404("", true, true, true, "");
    return;
}


$APPLICATION->SetTitle($title);

$APPLICATION->SetPageProperty("description", $desc);


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
