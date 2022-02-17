<?
use \Bitrix\Main\Page\Asset,
    \Realweb\Site\Site;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><? $APPLICATION->ShowTitle(); ?></title>
<?$APPLICATION->ShowHead()?>
<link rel="stylesheet" media="all" href="/local/templates/main/css/style.css">
</head>

<body class="html__body path-frontpage">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<header class="header" role="banner">
    <div class="header__top">
            <div class="header__fixedWrap">
                <div class="header__fixed width width_norm">
                    <div class="header__choosingClinic width_paddingLeftRight">
                        <? $APPLICATION->IncludeComponent("realweb:blank", "clinics", array(), false, array('HIDE_ICONS' => 'Y')); ?>


                    </div>
                    <noindex>
                        <div class="header__links width_paddingLeftRight">
                        <span class="header__link">
                            <a href="/form/zapros-dokumentov-dla-nalogovogo" class="use-ajax" data-dialog-options="{
                                    &quot;width&quot;:&quot;600px&quot;,
                                    &quot;minHeight&quot;:&quot;500px&quot;,
                                    &quot;dialogClass&quot;:&quot;popupDialog&quot;
                                    }" data-dialog-type="modal">Налоговый вычет</a>
                        </span>
                        <span class="header__link">
                        <a href="/form/callback" rel="nofollow" class="use-ajax" data-dialog-options="{
                               &quot;width&quot;:&quot;450px&quot;,
                               &quot;minHeight&quot;:&quot;500px&quot;,
                               &quot;dialogClass&quot;:&quot;popupDialog&quot;
                               }" data-dialog-type="modal">Заказать звонок</a>
                        </span>

                            <span class="header__link">
                            <a href="/form/zadat-vopros" class="use-ajax" data-dialog-options="{
                                    &quot;width&quot;:&quot;500px&quot;,
                                    &quot;minHeight&quot;:&quot;500px&quot;,
                                    &quot;dialogClass&quot;:&quot;popupDialog&quot;
                                    }" data-dialog-type="modal">Задать вопрос</a>
                        </span>
                            <span class="header__link">
                            <a href="/form/kontrol-kacestva" class="use-ajax" data-dialog-options="{
                               &quot;width&quot;:&quot;500px&quot;,
                               &quot;minHeight&quot;:&quot;500px&quot;,
                               &quot;dialogClass&quot;:&quot;popupDialog&quot;
                               }" data-dialog-type="modal">Контроль качества</a>
                        </span>
                        </div>
                    </noindex>
                    <noindex>
                        <div class="header__makeAppointmentWrap width_paddingLeftRight">
                            <a class="header__makeAppointment" href="/make-an-appointment">Запись на прием</a>
                        </div>
                    </noindex>
                </div>
            </div>
            <div class="header__topWrapper width_paddingStandart menuMobile">
            <div class="header__menuMobile menuMobile__button">
                <div class="menuMobile__line"></div>
            </div>
                <div class="header__menuAndButton menuMobile__content">
                    <nav class="header__menuTop menuHeader ">
                    <ul class="menuHeader__ul" role="menu">
                    <li class="menuHeader__li menuHeader__mobile" role="presentation">
                    <a class="menuHeader__a" role="menuitem" href="/">Главная</a>
                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/about" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/47">О компании</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/stomatology" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="stomatology">Услуги</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/price" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/127">Цены</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/personal" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="personal">Врачи</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/clinics" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="clinics">Клиники</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/portfolio" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="portfolio">Портфолио</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/akcii" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="akcii">Акции</a>
                                </li>
                        <li class="menuHeader__li" role="presentation">
                    <a href="/reviews" class="menuHeader__a" role="menuitem" data-drupal-link-system-path="reviews">Отзывы</a>
                                </li>
                  </ul>
                    </nav>
                </div>

            <div class="header__logoMobile logo_mobile">
                <a class="logo__linck" href="/">
                    <img class="logo__img" src="/local/templates/main/images/logo.jpg" alt="Стоматология в СПб – зубные клиники «СТОМА»" title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                </a>
            </div>

            <div class="header__searchMobileButton width_paddingStandart">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>

        </div>
            <noindex>
            <div class="header__searchMobile width_paddingLeftRight">
                <div id="searchM" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml" class="search">
                    <input placeholder="Поиск" class="search__input"> <!---->
                </div>
            </div>
        </noindex>
        <noindex>
            <div class="header__buttons width_paddingStandart">
            <span class="header__link">
                <a href="/form/callback" class="use-ajax" data-dialog-options="{
                           &quot;width&quot;:&quot;450px&quot;,
                           &quot;minHeight&quot;:&quot;500px&quot;,
                           &quot;dialogClass&quot;:&quot;popupDialog&quot;
                           }" data-dialog-type="modal">Заказать звонок</a>
            </span>
                <span class="header__link">
                <a href="/form/zadat-vopros" class="use-ajax" data-dialog-options="{
                           &quot;width&quot;:&quot;500px&quot;,
                           &quot;minHeight&quot;:&quot;500px&quot;,
                           &quot;dialogClass&quot;:&quot;popupDialog&quot;
                           }" data-dialog-type="modal">Задать вопрос</a>
            </span>
                <span class="header__link">
                <a href="/form/kontrol-kacestva" class="use-ajax" data-dialog-options="{
                           &quot;width&quot;:&quot;500px&quot;,
                           &quot;minHeight&quot;:&quot;500px&quot;,
                           &quot;dialogClass&quot;:&quot;popupDialog&quot;
                           }" data-dialog-type="modal">Контроль качества</a>
            </span>

                <a class="header__make" href="/make-an-appointment">Запись на прием</a>
                <span class="header__link" style="flex-basis: 100%">
                        <a href="/form/zapros-dokumentov-dla-nalogovogo" class="use-ajax" data-dialog-options="{
                                &quot;width&quot;:&quot;600px&quot;,
                                &quot;minHeight&quot;:&quot;500px&quot;,
                                &quot;dialogClass&quot;:&quot;popupDialog&quot;
                                }" data-dialog-type="modal">Налоговый вычет</a>
                    </span>
            </div>
        </noindex>
        <div class="header__center">
            <div class="header__centerWrapper width width_norm width_paddingDisableMobileDevice">
                <div class="header__logo width_paddingStandart">
                    <img src="/local/templates/main/images/logo.jpg" class="logo__img" alt="Стоматология в СПб – зубные клиники «СТОМА»" title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга">
                </div>
                <div class="header__menu">
                    <div class="glavnoeMenu width_paddingLeftRight">
                        <ul class="glavnoeMenu__ul" role="menu">
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/stomatology" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="stomatology">Услуги</a>
                            </li>
                             <li class="glavnoeMenu__li" role="presentation">
                                <a href="/price" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/127">Цены</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/akcii" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="akcii">Акции</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/clinics" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="clinics">Клиники</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                 <a href="/personal" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="personal">Врачи</a><ul role="menu" class="glavnoeMenu__ul subMenuDoctor"><li class="glavnoeMenu__li"><a href="/personal/stomatologi-terapevty" class="glavnoeMenu__a">Терапевты</a></li><li class="glavnoeMenu__li"><a href="/personal/parodontologi" class="glavnoeMenu__a">Пародонтологи</a></li><li class="glavnoeMenu__li"><a href="/personal/stomatologi-ortopedy" class="glavnoeMenu__a">Ортопеды</a></li><li class="glavnoeMenu__li"><a href="/personal/ortodonty" class="glavnoeMenu__a">Ортодонты</a></li><li class="glavnoeMenu__li"><a href="/personal/stomatologi-hirurgi" class="glavnoeMenu__a">Хирурги</a></li></ul>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/portfolio" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="portfolio">Портфолио</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/about" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/47">О компании</a><ul role="menu" class="glavnoeMenu__ul subMenuDoctorN"><li class="glavnoeMenu__li"><a href="/news" class="glavnoeMenu__a">Новости</a></li></ul>
                            </li>
                        </ul>
                </div>
            </div>
                <div class="header__search width_paddingStandart">
                    <noindex>
                        <div id="search" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml" class="search">
                            <input placeholder="Поиск" class="search__input"> <!---->
                        </div>
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

            <div class="header__menuTablet">
                <div class="glavnoeMenu width_paddingLeftRight">
                        <ul class="glavnoeMenu__ul" role="menu">
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/stomatology" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="stomatology">Услуги</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/price" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/127">Цены</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/akcii" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="akcii">Акции</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/clinics" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="clinics">Клиники</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/personal" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="personal">Врачи</a><ul role="menu" class="glavnoeMenu__ul subMenuDoctor"><li class="glavnoeMenu__li"><a href="/personal/stomatologi-terapevty" class="glavnoeMenu__a">Терапевты</a></li><li class="glavnoeMenu__li"><a href="/personal/parodontologi" class="glavnoeMenu__a">Пародонтологи</a></li><li class="glavnoeMenu__li"><a href="/personal/stomatologi-ortopedy" class="glavnoeMenu__a">Ортопеды</a></li><li class="glavnoeMenu__li"><a href="/personal/ortodonty" class="glavnoeMenu__a">Ортодонты</a></li><li class="glavnoeMenu__li"><a href="/personal/stomatologi-hirurgi" class="glavnoeMenu__a">Хирурги</a></li></ul>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/portfolio" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="portfolio">Портфолио</a>
                            </li>
                            <li class="glavnoeMenu__li" role="presentation">
                                <a href="/about" class="glavnoeMenu__a" role="menuitem" data-drupal-link-system-path="taxonomy/term/47">О компании</a><ul role="menu" class="glavnoeMenu__ul subMenuDoctorN"><li class="glavnoeMenu__li"><a href="/news" class="glavnoeMenu__a">Новости</a></li></ul>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</header>


