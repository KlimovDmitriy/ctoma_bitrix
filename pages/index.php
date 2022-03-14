<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("");

?><? $APPLICATION->IncludeComponent(
    "bitrix:catalog", "content", array(
    "ACTION_VARIABLE" => "action",
    "ADD_ELEMENT_CHAIN" => "Y",
    "ADD_PICT_PROP" => "-",
    "ADD_PROPERTIES_TO_BASKET" => "Y",
    "ADD_SECTIONS_CHAIN" => "Y",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "BASKET_URL" => "",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "N",
    "COMPONENT_TEMPLATE" => "content",
    "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
    "DETAIL_BACKGROUND_IMAGE" => "-",
    "DETAIL_BRAND_USE" => "N",
    "DETAIL_BROWSER_TITLE" => "-",
    "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
    "DETAIL_DETAIL_PICTURE_MODE" => "IMG",
    "DETAIL_DISPLAY_NAME" => "Y",
    "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
    "DETAIL_META_DESCRIPTION" => "-",
    "DETAIL_META_KEYWORDS" => "-",
    "DETAIL_PROPERTY_CODE" => array(
        0 => "NOTE",
    ),
    "DETAIL_SET_CANONICAL_URL" => "N",
    "DETAIL_USE_COMMENTS" => "N",
    "DETAIL_USE_VOTE_RATING" => "N",
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_SORT_FIELD" => "sort",
    "ELEMENT_SORT_FIELD2" => "id",
    "ELEMENT_SORT_ORDER" => "asc",
    "ELEMENT_SORT_ORDER2" => "desc",
    "FILTER_VIEW_MODE" => "VERTICAL",
    "IBLOCK_ID" => \Realweb\Site\Site::getIblockId('content'),
    "IBLOCK_TYPE" => "Content",
    "INCLUDE_SUBSECTIONS" => "Y",
    "LABEL_PROP" => "-",
    "LINE_ELEMENT_COUNT" => "",
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
    "LINK_IBLOCK_ID" => "",
    "LINK_IBLOCK_TYPE" => "",
    "LINK_PROPERTY_SID" => "",
    "LIST_BROWSER_TITLE" => "-",
    "LIST_META_DESCRIPTION" => "-",
    "LIST_META_KEYWORDS" => "-",
    "LIST_PROPERTY_CODE" => array(
        0 => "PAGE_TYPE",
        1 => "",
        2 => "",
    ),
    "MESSAGE_404" => "",
    "MESS_BTN_ADD_TO_BASKET" => "",
    "MESS_BTN_BUY" => "",
    "MESS_BTN_COMPARE" => "",
    "MESS_BTN_DETAIL" => "",
    "MESS_NOT_AVAILABLE" => "",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Товары",
    "PAGE_ELEMENT_COUNT" => "99999",
    "PARTIAL_PRODUCT_PROPERTIES" => "N",
    "PRICE_CODE" => array(),
    "PRICE_VAT_INCLUDE" => "N",
    "PRICE_VAT_SHOW_VALUE" => "N",
    "PRODUCT_ID_VARIABLE" => "id",
    "PRODUCT_PROPERTIES" => array(),
    "PRODUCT_PROPS_VARIABLE" => "",
    "PRODUCT_QUANTITY_VARIABLE" => "",
    "SECTIONS_SHOW_PARENT_NAME" => "Y",
    "SECTIONS_VIEW_MODE" => "LIST",
    "SECTION_BACKGROUND_IMAGE" => "-",
    "SECTION_COUNT_ELEMENTS" => "N",
    "SECTION_ID_VARIABLE" => "",
    "SECTION_TOP_DEPTH" => "2",
    "SEF_FOLDER" => "/",
    "SEF_MODE" => "Y",
    "SET_LAST_MODIFIED" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "Y",
    "SHOW_404" => "N",
    "SHOW_DEACTIVATED" => "N",
    "SHOW_PRICE_COUNT" => "1",
    "SHOW_TOP_ELEMENTS" => "Y",
    "SIDEBAR_DETAIL_SHOW" => "N",
    "SIDEBAR_PATH" => "",
    "SIDEBAR_SECTION_SHOW" => "Y",
    "TEMPLATE_THEME" => "blue",
    "TOP_ELEMENT_COUNT" => "9",
    "TOP_ELEMENT_SORT_FIELD" => "sort",
    "TOP_ELEMENT_SORT_FIELD2" => "id",
    "TOP_ELEMENT_SORT_ORDER" => "asc",
    "TOP_ELEMENT_SORT_ORDER2" => "desc",
    "TOP_LINE_ELEMENT_COUNT" => "3",
    "TOP_PROPERTY_CODE" => array(
        0 => "",
        1 => "",
    ),
    "TOP_VIEW_MODE" => "SECTION",
    "USE_COMPARE" => "N",
    "USE_ELEMENT_COUNTER" => "Y",
    "USE_FILTER" => "N",
    "USE_MAIN_ELEMENT_SECTION" => "N",
    "USE_PRICE_COUNT" => "N",
    "USE_PRODUCT_QUANTITY" => "N",
    "USE_STORE" => "N",
    "HIDE_NOT_AVAILABLE" => "N",
    "COMMON_SHOW_CLOSE_POPUP" => "N",
    "SHOW_DISCOUNT_PERCENT" => "N",
    "SHOW_OLD_PRICE" => "N",
    "DETAIL_SHOW_MAX_QUANTITY" => "N",
    "USE_SALE_BESTSELLERS" => "Y",
    "CONVERT_CURRENCY" => "N",
    "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
    "COMMON_ADD_TO_BASKET_ACTION" => "",
    "TOP_ADD_TO_BASKET_ACTION" => "ADD",
    "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
    "DETAIL_ADD_TO_BASKET_ACTION" => array(
        0 => "BUY",
    ),
    "USE_ALSO_BUY" => "N",
    "USE_GIFTS_DETAIL" => "Y",
    "USE_GIFTS_SECTION" => "Y",
    "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
    "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
    "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
    "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
    "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
    "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
    "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
    "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
    "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
    "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
    "GIFTS_SHOW_OLD_PRICE" => "Y",
    "GIFTS_SHOW_NAME" => "Y",
    "GIFTS_SHOW_IMAGE" => "Y",
    "GIFTS_MESS_BTN_BUY" => "Выбрать",
    "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",
    "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
    "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
    "USE_BIG_DATA" => "Y",
    "BIG_DATA_RCM_TYPE" => "bestsell",
    "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
    "SEF_URL_TEMPLATES" => array(
        "sections" => "",
        "section" => "#SECTION_CODE_PATH#/",
        "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
        "compare" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/#SMART_FILTER_PATH#/",
        "smart_filter" => "",
    )
), false, array('HIDE_ICONS' => 'Y')
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>