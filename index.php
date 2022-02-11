<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Стома");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная");
?>

    <!-- slider -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide__1" style="cursor:pointer;background-image: url('/local/templates/main/images/222.jpg')" onclick="window.location.href='/lechenie-v-kredit'">
                    <div class="slide__wrap">
                        <div class="slide__wrapList">
                            <span class="slide__text" style="font-size: 50px;">Лечите зубы сегодня – платите потом! Лечение в рассрочку и кредит в клиниках «СТОМА»</span>
                            <span class="osnovnoi_tekst_slaida" style="font-size: 25px;"></span>
                        </div>
                        <div class="slide__link"><a href="https://ctoma.ru/lechenie-v-kredit">Узнать подробности</a></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide__1" style="cursor:pointer;background-image: url('/local/templates/main/images/1.jpg')" onclick="window.location.href='/lechenie-v-kredit'">
                    <div class="slide__wrap">
                        <div class="slide__wrapList">
                            <span class="slide__text" style="font-size: 50px;">Успейте пролечиться до повышения цен! Дарим скидку 10%  на терапевтическое лечение до конца февраля!</span>
                            <span class="osnovnoi_tekst_slaida" style="font-size: 25px;"></span>
                        </div>
                        <div class="slide__link"><a href="https://ctoma.ru/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie">Узнать подробности</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- / slider -->
    <div class="content_norm width width_light">
        <?php
        $APPLICATION->IncludeComponent(
            "racurs:base.include",
            ".default",
            array(
                "CODE" => "MAIN_PAGE",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => ""
            ),
            false,
            array(
                "SHOW_ICON" => $isHideChange ? "Y" : 'N',
            )
        ); ?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>