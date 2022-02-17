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

?>




<div class="klinika__title">
    <h1 class="klinika__titleText title_norm width width_norm width_paddingStandart"><? echo $name; ?></h1>
</div>
<div class="klinika__mainContent width">
    <div class="klinika__content width width_norm">
        <div class="block-region-main">
            <div class="block">
                <article class="clinic width width_norm width_paddingStandart">
                    <div class="clinic__topWrap" itemscope="" itemtype="http://schema.org/Organization">
                        <meta itemprop="name" content="ООО 'Дентал Менджемент'">
                        <div class="clinic__img">
                            <div> <img src="/upload/resize_cache/iblock/e75/1aatg6a61w3lzvb15ndkhbb058097024/250_150_2/nayki-min[1].jpg" alt="Клиника на Кораблестроителей, Кораблестроителей ул., д.32, корпус 3, литер А, 3 этаж" typeof="foaf:Image" width="320" height="320"></div>
                        </div>
                        <div class="clinic__info">
                            <div class="clinic__adres">
                                <label>Адрес:</label>
                                <div>
                                    <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"];?>
                                </div>
                            </div>
                            <div class="clinic__rezim">
                                <label>Режим работы:</label>
                                <div><?=$arResult["PROPERTIES"]["SCHEDULE"]["VALUE"];?></div>
                            </div>
                            <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                <meta itemprop="streetAddress" content="Кораблестроителей ул., д.32, корпус 3, литер А, 2 этаж">
                                <meta itemprop="postalCode" content="190000">
                                <meta itemprop="addressLocality" content="Санкт-Петербург">
                            </div>
                            <div class="clinic__metro">
                                <div>
                                    <div>Станция метро</div>
                                    <div><?=$arResult["PROPERTIES"]["METRO_STATION"]["VALUE"];?></div>
                                </div>
                            </div>
                            <div class="clinic__phone">
                                <meta itemprop="telephone" content="+7 (812) 305-49-46">
                                <label>Телефон:</label>
                                <div><a class="call_phone_7_1" href="tel:+7 (812) 305-49-46">+7 (812) 561-52-57</a></div>
                            </div>
                            <meta itemprop="email" content="info@ctoma.ru">
                            <div class="clinic__zapisatsa">
                                <a href="/make-an-appointment?title=28" class=" button_red">Записаться</a>
                            </div>
                        </div>
                    </div><!-- /clinic__topWrap -->

                    <div class="clinic__bottom">
                        <div class="clinic__bottomRight">
                            <div class="clinic__informacia content_norm">
                                <?php echo $arResult['DETAIL_TEXT']; ?>
                            </div>
                        <div class="kliniksGallery content_norm">
                            <h2>Фотографии клиники</h2>
                            <div>
                                <div>
                                    <a href="https://ctoma.ru/sites/default/files/2020-08/korablestr_one.png" title="1" data-colorbox-gallery="gallery-clinics-28-7-pRRd12-5w" class="colorbox cboxElement" data-cbox-img-attrs="{&quot;alt&quot;:&quot;1&quot;}"><img src="/sites/default/files/styles/medium/public/2020-08/korablestr_one.png?itok=dkzl7mBk" alt="1" typeof="foaf:Image" width="220" height="147">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clinic__description content_norm"></div>
                        </div>
                    </div><!-- /clinic__bottom -->
                </article>
            </div>
        </div>
    </div>
</div>