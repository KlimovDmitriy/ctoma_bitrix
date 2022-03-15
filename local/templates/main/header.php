<?

use \Bitrix\Main\Page\Asset,
    \Realweb\Site\Site;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead() ?>
    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fontawesome.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mask.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/validate.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/jquery-ui/jquery-ui.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/jquery-ui/rus.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/custom.js');

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/jquery-ui/jquery-ui.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/twentytwenty.css');
    ?>
    <?php \Realweb\Site\Site::showIncludeText('HEAD_AFTER'); ?>
</head>

<body class="html__body path-frontpage">

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<?php \Realweb\Site\Site::showIncludeText('BODY_BEFORE'); ?>
<header class="header" role="banner">
    <div class="header__top">
        <div class="header__fixedWrap">
            <div class="header__fixed width width_norm">
                <div class="header__choosingClinic width_paddingLeftRight">
                    <? $APPLICATION->IncludeComponent("realweb:blank", "clinics", array(), false, array('HIDE_ICONS' => 'Y')); ?>


                </div>
                <?php \Realweb\Site\Site::showIncludeText('TOP_FORMS_LINKS'); ?>

            </div>
        </div>
        <div class="header__topWrapper width_paddingStandart menuMobile">
            <div class="header__menuMobile menuMobile__button">
                <div class="menuMobile__line"></div>
            </div>
            <div class="header__menuAndButton menuMobile__content">
                <nav class="header__menuTop menuHeader ">
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "top_mobile_menu", array(
                        "ROOT_MENU_TYPE" => "topmobile",    // Тип меню для первого уровня
                        "MAX_LEVEL" => "2",    // Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "topmobile",    // Тип меню для остальных уровней
                        "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "COMPONENT_TEMPLATE" => "",
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    ),
                        false
                    ); ?>
                </nav>
            </div>

            <div class="header__logoMobile logo_mobile">
                <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
                <a class="logo__linck" href="/">
                    <img class="logo__img" src="/local/templates/main/images/logo.jpg"
                         alt="Стоматология в СПб – зубные клиники «СТОМА»"
                         title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                </a>
                <?else:?>
                    <img class="logo__img" src="/local/templates/main/images/logo.jpg"
                         alt="Стоматология в СПб – зубные клиники «СТОМА»"
                         title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                <? endif; ?>
            </div>

            <div class="header__searchMobileButton width_paddingStandart">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>

        </div>
        <noindex>

            <div class="header__searchMobile width_paddingLeftRight">
                <div id="searchM" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"
                     class="search">
                    <? $APPLICATION->IncludeComponent(
                        "arturgolubev:search.title",
                        ".default",
                        array(
                            "CATEGORY_0_TITLE" => "Услуги",
                            "CHECK_DATES" => "Y",
                            "COMPONENT_TEMPLATE" => ".default",
                            "CONTAINER_ID" => "search_mobile",
                            "CONVERT_CURRENCY" => "Y",
                            "CURRENCY_ID" => "RUB",
                            "IBLOCK_ID" => array(
                                0 => \Realweb\Site\Site::getIblockId("doctors"),
                                1 => \Realweb\Site\Site::getIblockId("news"),
                                2 => \Realweb\Site\Site::getIblockId("stomatology"),
                            ),
                            "INPUT_ID" => "title-search-input-mobile",
                            "JS_OPENER" => "N",
                            "JS_OPENER_MOBILE" => "N",
                            "NUM_CATEGORIES" => "3",
                            "OFFERS_FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "DETAIL_PICTURE",
                                2 => "",
                            ),
                            "OFFERS_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "CML2_LINK",
                                2 => "",
                            ),
                            "ORDER" => "rank",
                            "PAGE" => "/search/",
                            "PRICE_VAT_INCLUDE" => "N",
                            "PRODUCT_QUANTITY_VARIABLE" => "quan",
                            "SHOW_INPUT" => "Y",
                            "SHOW_OTHERS" => "N",
                            "SHOW_SEARCHBAR" => "N",
                            "SHOW_PREVIEW_TEXT" => "N",
                            "START_HIDDEN" => "N",
                            "TOP_COUNT" => "10",
                            "USE_LANGUAGE_GUESS" => "Y",
                            "USE_PRODUCT_QUANTITY" => "N",
                            "FILTER_NAME" => "",
                            "INPUT_PLACEHOLDER" => "",
                            "SHOW_LOADING_ANIMATE" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PRICE_CODE" => array(),
                            "SHOW_PROPS" => array(),
                            "SHOW_PREVIEW" => "N",
                            "PREVIEW_WIDTH_NEW" => "34",
                            "PREVIEW_HEIGHT_NEW" => "34",
                            "CATEGORY_0" => array(
                                0 => "iblock_content",
                            ),
                            "CATEGORY_0_iblock_content" => array(
                                0 => \Realweb\Site\Site::getIblockId("stomatology"),
                            ),
                            "CATEGORY_1_TITLE" => "Врачи",
                            "CATEGORY_1" => array(
                                0 => "iblock_content",
                            ),
                            "CATEGORY_1_iblock_content" => array(
                                0 => \Realweb\Site\Site::getIblockId("doctors"),
                            ),
                            "CATEGORY_2_TITLE" => "Новости",
                            "CATEGORY_2" => array(
                                0 => "iblock_content",
                            ),
                            "CATEGORY_2_iblock_content" => array(
                                0 => \Realweb\Site\Site::getIblockId("news"),
                            )
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </noindex>
        <noindex>
            <div class="header__buttons width_paddingStandart">

            <span class="header__link">
                <a data-form="callback" class="modaler use-ajax">Заказать звонок</a>
            </span>
                <span class="header__link">
                <a data-form="zadat-vopros" class="modaler use-ajax">Задать вопрос</a>
            </span>
                <span class="header__link">
                <a data-form="otziv" class="modaler use-ajax">Контроль качества</a>
            </span>

                <a class="header__make" href="/make-an-appointment">Запись на прием</a>
                <span class="header__link" style="flex-basis: 100%">
                        <a data-form="nalog" class="modaler use-ajax">Налоговый вычет</a>
                    </span>
            </div>
        </noindex>
        <div class="header__center">
            <div class="header__centerWrapper width width_norm width_paddingDisableMobileDevice">
                <div class="header__logo width_paddingStandart">
                    <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
                    <a href="/">
                    <img src="/local/templates/main/images/logo.jpg" class="logo__img"
                         alt="Стоматология в СПб – зубные клиники «СТОМА»"
                         title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                    </a>
                    <?else:?>
                        <img src="/local/templates/main/images/logo.jpg" class="logo__img"
                             alt="Стоматология в СПб – зубные клиники «СТОМА»"
                             title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                    <? endif; ?>
                </div>
                <div class="header__menu">
                    <div class="glavnoeMenu width_paddingLeftRight">
                        <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", array(
                            "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                            "MAX_LEVEL" => "2",    // Уровень вложенности меню
                            "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                            "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                            "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                            "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                            "COMPONENT_TEMPLATE" => "",
                            "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        ),
                            false
                        ); ?>
                    </div>
                </div>
                <div class="header__search width_paddingStandart">
                    <noindex>
                        <? $APPLICATION->IncludeComponent(
                            "arturgolubev:search.title",
                            ".default",
                            array(
                                "CATEGORY_0_TITLE" => "Услуги",
                                "CHECK_DATES" => "Y",
                                "COMPONENT_TEMPLATE" => ".default",
                                "CONTAINER_ID" => "search",
                                "CONVERT_CURRENCY" => "Y",
                                "CURRENCY_ID" => "RUB",
                                "IBLOCK_ID" => array(
                                    0 => \Realweb\Site\Site::getIblockId("doctors"),
                                    1 => \Realweb\Site\Site::getIblockId("news"),
                                    2 => \Realweb\Site\Site::getIblockId("stomatology"),
                                ),
                                "INPUT_ID" => "title-search-input",
                                "JS_OPENER" => "N",
                                "JS_OPENER_MOBILE" => "N",
                                "NUM_CATEGORIES" => "3",
                                "OFFERS_FIELD_CODE" => array(
                                    0 => "NAME",
                                    1 => "DETAIL_PICTURE",
                                    2 => "",
                                ),
                                "OFFERS_PROPERTY_CODE" => array(
                                    0 => "",
                                    1 => "CML2_LINK",
                                    2 => "",
                                ),
                                "ORDER" => "rank",
                                "PAGE" => "/search/",
                                "PRICE_VAT_INCLUDE" => "N",
                                "PRODUCT_QUANTITY_VARIABLE" => "quan",
                                "SHOW_INPUT" => "Y",
                                "SHOW_OTHERS" => "N",
                                "SHOW_SEARCHBAR" => "N",
                                "SHOW_PREVIEW_TEXT" => "N",
                                "START_HIDDEN" => "N",
                                "TOP_COUNT" => "10",
                                "USE_LANGUAGE_GUESS" => "Y",
                                "USE_PRODUCT_QUANTITY" => "N",
                                "FILTER_NAME" => "",
                                "INPUT_PLACEHOLDER" => "",
                                "SHOW_LOADING_ANIMATE" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PRICE_CODE" => array(),
                                "SHOW_PROPS" => array(),
                                "SHOW_PREVIEW" => "N",
                                "PREVIEW_WIDTH_NEW" => "34",
                                "PREVIEW_HEIGHT_NEW" => "34",
                                "CATEGORY_0" => array(
                                    0 => "iblock_content",
                                ),
                                "CATEGORY_0_iblock_content" => array(
                                    0 => \Realweb\Site\Site::getIblockId("stomatology"),
                                ),
                                "CATEGORY_1_TITLE" => "Врачи",
                                "CATEGORY_1" => array(
                                    0 => "iblock_content",
                                ),
                                "CATEGORY_1_iblock_content" => array(
                                    0 => \Realweb\Site\Site::getIblockId("doctors"),
                                ),
                                "CATEGORY_2_TITLE" => "Новости",
                                "CATEGORY_2" => array(
                                    0 => "iblock_content",
                                ),
                                "CATEGORY_2_iblock_content" => array(
                                    0 => \Realweb\Site\Site::getIblockId("news"),
                                )
                            ),
                            false
                        ); ?>

                    </noindex>
                </div>
                <div class="header__info width_paddingStandart">
                    <div class="views-row">
                        <div class="views-field views-field-field-phones">
                            <div class="field field-content call_phone_top"><?php \Realweb\Site\Site::showIncludeText('PHONE'); ?></div>
                            <div class="grafik">Часы работы call-центра: 09:00-21:00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


