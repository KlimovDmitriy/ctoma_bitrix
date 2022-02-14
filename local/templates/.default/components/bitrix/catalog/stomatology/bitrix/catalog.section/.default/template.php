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
?>
<div class="service__container ">


    <div class="service__center width width_norm width_paddingStandart">
        <div class="service__leftSidebar">

            <div class="serviceMenu">


                <ul class="serviceMenu__list">

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/kids" class="serviceMenu__linck">Детская стоматология </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/ortodontija" class="serviceMenu__linck">Детская ортодонтия </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/ortodontija/ispravlenie-prikusa" class="serviceMenu__linck">Исправление прикуса у детей </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/ortodontija/brekety" class="serviceMenu__linck">Брекеты для детей </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/lechenie" class="serviceMenu__linck">Лечение зубов у детей </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/lechenie/lechenie-kariesa" class="serviceMenu__linck">Лечение кариеса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/lechenie/lechenie-pulpita" class="serviceMenu__linck">Лечение пульпита у детей </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/serebrenie-zubov" class="serviceMenu__linck">Серебрение зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/hirurgia/udalenie-zubov" class="serviceMenu__linck">Удаление зубов у детей </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/ftorirovanie-zubov" class="serviceMenu__linck">Фторирование зубов детям </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/hirurgia" class="serviceMenu__linck">Хирургия в детской стоматологии </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/koronki" class="serviceMenu__linck">Коронки на молочные зубы </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/plastika-uzdechki/plastika-uzdechki-yazyka" class="serviceMenu__linck">Пластика уздечки языка у ребенка </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/rentgen-molochnyh-zubov" class="serviceMenu__linck">Рентген молочных зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/restavraciya-molochnyh-zubov" class="serviceMenu__linck">Реставрация молочных зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/kids/germitizatsia-fissur" class="serviceMenu__linck">Герметизация фиссур </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded menu-item--active-trail">



                        <a href="/stomatology/diagnostika" class="serviceMenu__linck">Диагностика </a>
                        <span class="menu_ml sub_open"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/diagnostika/dentalnaya-tomografiya" class="serviceMenu__linck">Дентальная компьютерная томография (ДКТ) </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/diagnostika/rentgen-zubov" class="serviceMenu__linck">Рентген зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/diagnostika/3d-tomografiya" class="serviceMenu__linck">3D снимок зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/diagnostika/panoramnyj-snimok-zubov" class="serviceMenu__linck">Панорамный снимок зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/diagnostika/telerentgenogramma" class="serviceMenu__linck">Телерентгенограмма </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/terapiya" class="serviceMenu__linck">Лечение зубов </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-zubov-pod-mikroskopom" class="serviceMenu__linck">Лечение зубов под микроскопом </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-kariesa" class="serviceMenu__linck">Лечение кариеса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-kariesa-bez-sverleniya" class="serviceMenu__linck">Лечение кариеса без сверления методом Icon </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-prisheechnogo-kariesa" class="serviceMenu__linck">Лечение пришеечного кариеса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/plombirovanie-zubov" class="serviceMenu__linck">Установка пломбы </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-periodontita" class="serviceMenu__linck">Лечение периодонтита </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-pulpita" class="serviceMenu__linck">Лечение пульпита </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/ortodontija" class="serviceMenu__linck">Ортодонтия </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/brekety-damon-clear" class="serviceMenu__linck">Брекеты Damon Clear </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/brekety-damon-q" class="serviceMenu__linck">Брекеты Damon Q </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/brekety-damon" class="serviceMenu__linck">Брекеты Damon </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/brekety-inspire-ice" class="serviceMenu__linck">Брекеты Inspire Ice </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ispravlenie-glubokogo-prikusa" class="serviceMenu__linck">Исправление глубокого прикуса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ispravlenie-distalnogo-prikusa" class="serviceMenu__linck">Исправление дистального прикуса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ligaturnye-brekety" class="serviceMenu__linck">Лигатурные брекеты </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/lechenie-otkrytogo-prikusa" class="serviceMenu__linck">Открытый прикус </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/prozracnye-brekety" class="serviceMenu__linck">Прозрачные брекеты </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/snyatie-retejnerov" class="serviceMenu__linck">Снятие ретейнеров </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ustanovka-retejnerov" class="serviceMenu__linck">Установка ретейнеров </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/izgotovlenie-kapp" class="serviceMenu__linck">Элайнеры </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/keramicheskaya-breket-sistema" class="serviceMenu__linck">Керамические брекеты </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ispravlenie-prikusa" class="serviceMenu__linck">Исправление прикуса </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/metallicheskie-breket-sistemy" class="serviceMenu__linck">Металлические брекет системы </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ortodonticheskie-plastinki" class="serviceMenu__linck">Ортодонтические пластинки </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/samoligiruyushchaya-breket-sistema" class="serviceMenu__linck">Самолигирующие брекеты </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/sapfirovaya-breket-sistema" class="serviceMenu__linck">Сапфировые брекеты </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/ustanovka-breket-sistem" class="serviceMenu__linck">Установка брекет систем </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/ortodontija/chastichnye-breket-sistemy" class="serviceMenu__linck">Частичные брекеты </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/parodontology" class="serviceMenu__linck">Пародонтология </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/vestibuloplastika" class="serviceMenu__linck">Вестибулопластика </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/kyuretazh-desen" class="serviceMenu__linck">Кюретаж десен </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/lechenie-parodontoza" class="serviceMenu__linck">Лечение пародонтоза </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/skejling" class="serviceMenu__linck">Пародонтальный скейлинг </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/prophyflex" class="serviceMenu__linck">Чистка зубов системой Prophyflex </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/parodontology/shinirovanie-zubov" class="serviceMenu__linck">Шинирование зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/terapiya/lechenie-parodontita" class="serviceMenu__linck">Лечение пародонтита </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--collapsed">



                        <a href="/stomatology/protezirovanie" class="serviceMenu__linck">Протезирование зубов </a>
                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/hirurgiya" class="serviceMenu__linck">Хирургическая стоматология </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/gingivoplastika" class="serviceMenu__linck">Гингивопластика </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/kostnaya-plastika" class="serviceMenu__linck">Наращивание костной ткани </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/plastika-uzdechki-guby" class="serviceMenu__linck">Пластика уздечки губы </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/sinus-lifting" class="serviceMenu__linck">Синус-лифтинг </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/udalenie-zuba-mudrosti" class="serviceMenu__linck">Удаление зуба мудрости </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/udalenie-kisty-zuba" class="serviceMenu__linck">Удаление кисты зуба </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/udalenie-kornya-zuba" class="serviceMenu__linck">Удаление корня зуба </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/udalenie-retinirovannogo-zuba" class="serviceMenu__linck">Удаление ретинированного зуба мудрости </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/gingivehktomiya" class="serviceMenu__linck">Гингивэктомия </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/udalenie-zuba" class="serviceMenu__linck">Удаление зуба </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/hirurgiya/implantacia" class="serviceMenu__linck">Имплантация </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/esteticheskaya-stomatologiya" class="serviceMenu__linck">Эстетическая стоматология </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/esteticheskaya-stomatologiya/narashchivanie-zuba" class="serviceMenu__linck">Наращивание зуба </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie-zoom4" class="serviceMenu__linck">Отбеливание зубов Zoom 4 </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie" class="serviceMenu__linck">Отбеливание зубов </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie-beyond" class="serviceMenu__linck">Отбеливание Beyond </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/esteticheskaya-stomatologiya/restavraciya-zuba" class="serviceMenu__linck">Реставрация зуба </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/profilaktika" class="serviceMenu__linck">Профилактика </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/profilaktika/apparat-vektor" class="serviceMenu__linck">Лечение аппаратом Вектор </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/profilaktika/remoterapia" class="serviceMenu__linck">Ремотерапия </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/profilaktika/chistka-zubnogo-kamnya" class="serviceMenu__linck">Чистка зубов от камня </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/profilaktika/professionalnaa-gigiena" class="serviceMenu__linck">Профессиональная гигиена </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/komfortnoe-lecenie" class="serviceMenu__linck">Комфортное лечение </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/komfortnoe-lecenie/sedacia" class="serviceMenu__linck">Седация </a>
                            </li>

                            <li class="serviceMenu__element">



                                <a href="/stomatology/komfortnoe-lecenie/obsii-narkoz" class="serviceMenu__linck">Общий наркоз </a>
                            </li>
                        </ul>

                    </li>

                    <li class="serviceMenu__element menu-item--expanded">



                        <a href="/stomatology/konsultatsiya-stomatologa" class="serviceMenu__linck">Консультация стоматолога </a>
                        <span class="menu_ml sub_close"></span>
                        <ul class="serviceMenu__list">

                            <li class="serviceMenu__element">



                                <a href="/stomatology/konsultatsiya-stomatologa/ortodont" class="serviceMenu__linck">Консультация ортодонта </a>
                            </li>
                        </ul>

                    </li>
                </ul>


            </div>

            <div class="makeImg">
                <div class="makeImg__text">
                    <!--noindex-->
                    <span class="makeImg__text1">Мы перезвоним – для Вас звонок бесплатный!</span>
                    <span class="makeImg__text2">Напишите свои имя и номер телефона, чтобы мы могли связаться с Вами.<br> Будем рады помочь Вам!</span>
                    <!--/noindex-->
                </div>
                <div class="makeImg__actions">
                    <a class="makeImg__button button_red" href="/make-an-appointment">Записаться</a>
                </div>
            </div>				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $(".fancybox").fancybox({
                        maxWidth	: 800,
                        maxHeight	: 600,
                        fitToView	: false,
                        width		: '70%',
                        height		: '70%',
                        autoSize	: true,
                        closeClick	: false,
                        openEffect	: 'none',
                        closeEffect	: 'none'
                    });
                });
            </script>

            <div class="header__makeAppointmentWrap width_paddingLeftRight" style="margin-top: 20px;">
                <a class="header__makeAppointment fancybox" href="#fancy-map">Наши клиники на карте <i class="fa fa-map-marker"></i></a>
            </div>				<style>
                .image-map-container {
                    position: relative;
                    display:inline-block;
                    margin-top: 20px;
                    box-shadow: 2px 3.464px 36px 4px rgba(0, 0, 0, 0.06);
                }
                .image-map-container img {
                    display:block;
                }
                .image-map-container .map-selector {
                    left:0;
                    top:0;
                    right:0;
                    bottom:0;
                    color:#546E7A00;
                }
                .image-map-container .map-selector.hover {
                    color:#546E7A80;
                }

                .map-selector:after {
                    content: '';
                    position: absolute;
                    top: inherit;
                    right: inherit;
                    bottom: inherit;
                    left: inherit;
                    display: none;
                    pointer-events: none;
                    border: 2px solid #AB5FFF;
                    border-radius:10px;
                }

                .map-selector.hover:after {
                    content: '';
                    position: absolute;
                    top: inherit;
                    right: inherit;
                    bottom: inherit;
                    left: inherit;
                    display:inherit;
                    pointer-events: none;
                    border: 2px solid #AB5FFF;
                    border-radius:10px;
                }
            </style>
            <div id="fancy-map" style="display:none">
                <div class="image-map-container">
                    <img src="https://ctoma.ru/themes/my_theme/bem/blocks/ctomaMap/img/map.png" usemap="#image-map">
                    <div class="map-selector">

                    </div>
                </div>


                <map name="image-map" id="image-map">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-ul-savushkina" coords="42,148,102,173" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-korablestroitelej" coords="69,275,141,309" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-bolshoj-pr-petrogradskoj-storony" coords="162,262,239,287" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-sikejrosa" coords="270,80,352,104" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-kolomyazhskom-prospekte" coords="271,137,351,162" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-lenina" coords="269,208,366,236" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-prospekte-nauki" coords="379,101,482,128" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-nevskom-prospekte" coords="501,365,663,415" shape="rect">
                    <area target="_blank" alt="" title="" href="https://ctoma.ru/clinics/klinika-na-mosovskom-prospekte" coords="270,683,356,712" shape="rect">
                </map>
            </div>
            <script>
                $('#image-map area').hover(
                    function () {
                        let coords = $(this).attr('coords').split(',');
                        var width = $('.image-map-container').width();
                        var height = $('.image-map-container').height();
                        $('.image-map-container .map-selector').addClass('hover').css({
                            'left': coords[0]+'px',
                            'top': coords[1] + 'px',
                            'right': width - coords[2],
                            'bottom': height - coords[3]
                        })
                    },

                    function () {
                        $('.image-map-container .map-selector').removeClass('hover').attr('style','');
                    }
                )
            </script>            </div>

        <div class="service__bottomMobile">
            <p class="toggleH2"><a class="content_toggle" href="#">Услуги</a></p>
            <div class="content_block_service" style="display: none;">
                <div class="serviceMenu">


                    <ul class="serviceMenu__list">

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/kids" class="serviceMenu__linck">Детская стоматология </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/ortodontija" class="serviceMenu__linck">Детская ортодонтия </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/ortodontija/ispravlenie-prikusa" class="serviceMenu__linck">Исправление прикуса у детей </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/ortodontija/brekety" class="serviceMenu__linck">Брекеты для детей </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/lechenie" class="serviceMenu__linck">Лечение зубов у детей </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/lechenie/lechenie-kariesa" class="serviceMenu__linck">Лечение кариеса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/lechenie/lechenie-pulpita" class="serviceMenu__linck">Лечение пульпита у детей </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/serebrenie-zubov" class="serviceMenu__linck">Серебрение зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/hirurgia/udalenie-zubov" class="serviceMenu__linck">Удаление зубов у детей </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/ftorirovanie-zubov" class="serviceMenu__linck">Фторирование зубов детям </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/hirurgia" class="serviceMenu__linck">Хирургия в детской стоматологии </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/koronki" class="serviceMenu__linck">Коронки на молочные зубы </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/plastika-uzdechki/plastika-uzdechki-yazyka" class="serviceMenu__linck">Пластика уздечки языка у ребенка </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/rentgen-molochnyh-zubov" class="serviceMenu__linck">Рентген молочных зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/restavraciya-molochnyh-zubov" class="serviceMenu__linck">Реставрация молочных зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/kids/germitizatsia-fissur" class="serviceMenu__linck">Герметизация фиссур </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded menu-item--active-trail">



                            <a href="/stomatology/diagnostika" class="serviceMenu__linck">Диагностика </a>
                            <span class="menu_ml sub_open"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/diagnostika/dentalnaya-tomografiya" class="serviceMenu__linck">Дентальная компьютерная томография (ДКТ) </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/diagnostika/rentgen-zubov" class="serviceMenu__linck">Рентген зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/diagnostika/3d-tomografiya" class="serviceMenu__linck">3D снимок зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/diagnostika/panoramnyj-snimok-zubov" class="serviceMenu__linck">Панорамный снимок зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/diagnostika/telerentgenogramma" class="serviceMenu__linck">Телерентгенограмма </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/terapiya" class="serviceMenu__linck">Лечение зубов </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-zubov-pod-mikroskopom" class="serviceMenu__linck">Лечение зубов под микроскопом </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-kariesa" class="serviceMenu__linck">Лечение кариеса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-kariesa-bez-sverleniya" class="serviceMenu__linck">Лечение кариеса без сверления методом Icon </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-prisheechnogo-kariesa" class="serviceMenu__linck">Лечение пришеечного кариеса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/plombirovanie-zubov" class="serviceMenu__linck">Установка пломбы </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-periodontita" class="serviceMenu__linck">Лечение периодонтита </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-pulpita" class="serviceMenu__linck">Лечение пульпита </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/ortodontija" class="serviceMenu__linck">Ортодонтия </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/brekety-damon-clear" class="serviceMenu__linck">Брекеты Damon Clear </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/brekety-damon-q" class="serviceMenu__linck">Брекеты Damon Q </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/brekety-damon" class="serviceMenu__linck">Брекеты Damon </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/brekety-inspire-ice" class="serviceMenu__linck">Брекеты Inspire Ice </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ispravlenie-glubokogo-prikusa" class="serviceMenu__linck">Исправление глубокого прикуса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ispravlenie-distalnogo-prikusa" class="serviceMenu__linck">Исправление дистального прикуса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ligaturnye-brekety" class="serviceMenu__linck">Лигатурные брекеты </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/lechenie-otkrytogo-prikusa" class="serviceMenu__linck">Открытый прикус </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/prozracnye-brekety" class="serviceMenu__linck">Прозрачные брекеты </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/snyatie-retejnerov" class="serviceMenu__linck">Снятие ретейнеров </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ustanovka-retejnerov" class="serviceMenu__linck">Установка ретейнеров </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/izgotovlenie-kapp" class="serviceMenu__linck">Элайнеры </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/keramicheskaya-breket-sistema" class="serviceMenu__linck">Керамические брекеты </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ispravlenie-prikusa" class="serviceMenu__linck">Исправление прикуса </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/metallicheskie-breket-sistemy" class="serviceMenu__linck">Металлические брекет системы </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ortodonticheskie-plastinki" class="serviceMenu__linck">Ортодонтические пластинки </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/samoligiruyushchaya-breket-sistema" class="serviceMenu__linck">Самолигирующие брекеты </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/sapfirovaya-breket-sistema" class="serviceMenu__linck">Сапфировые брекеты </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/ustanovka-breket-sistem" class="serviceMenu__linck">Установка брекет систем </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/ortodontija/chastichnye-breket-sistemy" class="serviceMenu__linck">Частичные брекеты </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/parodontology" class="serviceMenu__linck">Пародонтология </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/vestibuloplastika" class="serviceMenu__linck">Вестибулопластика </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/kyuretazh-desen" class="serviceMenu__linck">Кюретаж десен </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/lechenie-parodontoza" class="serviceMenu__linck">Лечение пародонтоза </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/skejling" class="serviceMenu__linck">Пародонтальный скейлинг </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/prophyflex" class="serviceMenu__linck">Чистка зубов системой Prophyflex </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/parodontology/shinirovanie-zubov" class="serviceMenu__linck">Шинирование зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/terapiya/lechenie-parodontita" class="serviceMenu__linck">Лечение пародонтита </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--collapsed">



                            <a href="/stomatology/protezirovanie" class="serviceMenu__linck">Протезирование зубов </a>
                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/hirurgiya" class="serviceMenu__linck">Хирургическая стоматология </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/gingivoplastika" class="serviceMenu__linck">Гингивопластика </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/kostnaya-plastika" class="serviceMenu__linck">Наращивание костной ткани </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/plastika-uzdechki-guby" class="serviceMenu__linck">Пластика уздечки губы </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/sinus-lifting" class="serviceMenu__linck">Синус-лифтинг </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/udalenie-zuba-mudrosti" class="serviceMenu__linck">Удаление зуба мудрости </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/udalenie-kisty-zuba" class="serviceMenu__linck">Удаление кисты зуба </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/udalenie-kornya-zuba" class="serviceMenu__linck">Удаление корня зуба </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/udalenie-retinirovannogo-zuba" class="serviceMenu__linck">Удаление ретинированного зуба мудрости </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/gingivehktomiya" class="serviceMenu__linck">Гингивэктомия </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/udalenie-zuba" class="serviceMenu__linck">Удаление зуба </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/hirurgiya/implantacia" class="serviceMenu__linck">Имплантация </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/esteticheskaya-stomatologiya" class="serviceMenu__linck">Эстетическая стоматология </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/esteticheskaya-stomatologiya/narashchivanie-zuba" class="serviceMenu__linck">Наращивание зуба </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie-zoom4" class="serviceMenu__linck">Отбеливание зубов Zoom 4 </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie" class="serviceMenu__linck">Отбеливание зубов </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/esteticheskaya-stomatologiya/otbelivanie-beyond" class="serviceMenu__linck">Отбеливание Beyond </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/esteticheskaya-stomatologiya/restavraciya-zuba" class="serviceMenu__linck">Реставрация зуба </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/profilaktika" class="serviceMenu__linck">Профилактика </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/profilaktika/apparat-vektor" class="serviceMenu__linck">Лечение аппаратом Вектор </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/profilaktika/remoterapia" class="serviceMenu__linck">Ремотерапия </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/profilaktika/chistka-zubnogo-kamnya" class="serviceMenu__linck">Чистка зубов от камня </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/profilaktika/professionalnaa-gigiena" class="serviceMenu__linck">Профессиональная гигиена </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/komfortnoe-lecenie" class="serviceMenu__linck">Комфортное лечение </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/komfortnoe-lecenie/sedacia" class="serviceMenu__linck">Седация </a>
                                </li>

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/komfortnoe-lecenie/obsii-narkoz" class="serviceMenu__linck">Общий наркоз </a>
                                </li>
                            </ul>

                        </li>

                        <li class="serviceMenu__element menu-item--expanded">



                            <a href="/stomatology/konsultatsiya-stomatologa" class="serviceMenu__linck">Консультация стоматолога </a>
                            <span class="menu_ml sub_close"></span>
                            <ul class="serviceMenu__list">

                                <li class="serviceMenu__element">



                                    <a href="/stomatology/konsultatsiya-stomatologa/ortodont" class="serviceMenu__linck">Консультация ортодонта </a>
                                </li>
                            </ul>

                        </li>
                    </ul>


                </div></div>
        </div>

        <div class="service__content">
            <div class="block-region-main"><div class="block">





                    <style type="text/css">
                        .title_norm {
                            margin-top: 0px;
                            padding-left: 0px;
                        }
                        .serviceDefaultAdd {
                            margin-top: 40px;
                        }
                    </style>

                    <h1 class="service__titleText title_norm width width_norm width_paddingStandart">                        <div>Томография зубов</div>
                    </h1><div class="serviceDefault content_norm">
                        <?php echo $arResult['DESCRIPTION']; ?>
                    </div>

                    <div class="views-element-container"><div>








                            <div class="views-row">
                                <div class="praiseTable">
                                    <div>
                                        <div><div class="praiseTable__group">
                                                <div class="praiseTable__nameGroup">
                                                    <div>Дентальная томография</div>

                                                </div>
                                                <div class="praiseTable__list">
                                                    <div class="praiseTable__row odd">
                                                        <div class="praiseTable__name">                        <div>3D-томография 1 челюсти (1 стороны)</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>2700 руб.</div>
                                                        </div>

                                                    </div>
                                                    <div class="praiseTable__row even">
                                                        <div class="praiseTable__name">                        <div>3D-томография от 1 до 3 зубов</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>1700 руб.</div>
                                                        </div>

                                                    </div>
                                                    <div class="praiseTable__row odd">
                                                        <div class="praiseTable__name">                        <div>3D-томография пазух</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>2700 руб.</div>
                                                        </div>

                                                    </div>
                                                    <div class="praiseTable__row even">
                                                        <div class="praiseTable__name">                        <div>3D-томография, включающая обе челюсти</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>3000 руб.</div>
                                                        </div>

                                                    </div>
                                                    <div class="praiseTable__row odd">
                                                        <div class="praiseTable__name">                        <div>Описание снимка 3D-томографии, включающей обе челюсти (в течение 2-х дней)</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>700 руб.</div>
                                                        </div>

                                                    </div>
                                                    <div class="praiseTable__row even">
                                                        <div class="praiseTable__name">                        <div>Радиовизиография  (1 снимок)</div>
                                                        </div>
                                                        <div class="praiseTable__cena">                        <div>550 руб.</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>









                        </div></div>




                    <div class="service__zapisatsa">
                        <a href="/make-an-appointment" class="button_red" target="_blank">Записаться</a>
                    </div>


                    <div class="serviceDefault content_norm serviceDefaultAdd">
                    </div>

                    <div class="views-element-container"></div>



                </div>
            </div>

            <div class="faq-blk content_norm ">
                <div class="views-element-container"><div>

















                    </div></div>

            </div>






        </div>




    </div>


    <!---->




    <div class="actions__title title_home width width_norm width_paddingStandart"><span class="title__br"></span><span class="title__text map__caption">Клиники на карте</span><span class="title__br"></span></div>

    <div id="searchMap" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml" class="searchMap"><div class="searchMap__top"><div class="searchMap__search"><input placeholder="поиск ближайшей клиники, введите адрес" class="searchMap__input"> <span class="searchMap__inputSend"></span> <div class="searchMap__inputSend button__search_map">Найти</div></div> <div class="searchMap__routesMobile width width_norm width_paddingStandart"><span>Построить маршрут на автомобиле</span> <span>Общественном транспорте</span> <span>Пешком</span></div></div> <div class="searchMap__mapWrap width width_norm"><span class="searchMap__podR"></span> <span class="searchMap__podL"></span> <div class="searchMap__infoMap"><div class="searchMap__info"><div class="searchMap__name">
                        Колл-центр
                    </div> <div class="searchMap__rezim_raboty"><label>Режим работы:</label> <span>Пн.-Вс. 09.00-21.00</span></div> <div class="searchMap__phones"><label>Звоните:</label> <span class="call_phone_clinic"><a href="tel:+78125615286" style="color: rgb(216, 32, 67); text-decoration: none;">+7 (812) 561-52-86</a></span></div> <!----> <div class="searchMap__active"><a href="/make-an-appointment" class="makeImg__button button_red">Записаться</a></div> <div class="searchMap__callback"><a href="/form/callback" data-dialog-options="{
                           &quot;width&quot;:&quot;450px&quot;,
                           &quot;minHeight&quot;:&quot;500px&quot;,
                           &quot;dialogClass&quot;:&quot;popupDialog&quot;
                           }" data-dialog-type="modal" class="use-ajax">Заказать обратный звонок</a></div></div> <div class="searchMap__map"><div id="searchMap__mapYandex" class="searchMap__mapYandex" style="width: 100%; height: 450px;"><ymaps class="ymaps-2-1-79-map" style="width: 769px; height: 450px;"><ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru" style="width: 769px; height: 450px;"><ymaps class="ymaps-2-1-79-inner-panes"><ymaps class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 3000; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;"></ymaps><ymaps class="ymaps-2-1-79-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 601;"><ymaps style="z-index: 150; position: absolute;"><canvas style="position: absolute; width: 1025px; height: 706px; left: -128px; top: -128px;" height="706" width="1025"></canvas></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 6002;"><ymaps><ymaps class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no" style=""><ymaps class="ymaps-2-1-79-copyright__fog">…</ymaps><ymaps class="ymaps-2-1-79-copyright__wrap"><ymaps class="ymaps-2-1-79-copyright__layout"><ymaps class="ymaps-2-1-79-copyright__content-cell"><ymaps class="ymaps-2-1-79-copyright__content"><ymaps class="ymaps-2-1-79-copyright__text">© Яндекс</ymaps><ymaps class="ymaps-2-1-79-copyright__agreement">&nbsp;<a class="ymaps-2-1-79-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия использования</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyright__logo-cell"><a class="ymaps-2-1-79-copyright__logo" href="" target="_blank"></a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-map-copyrights-promo"><ymaps><ymaps class="ymaps-2-1-79-gotoymaps" title="Открыть в Яндекс.Картах"><ymaps class="ymaps-2-1-79-gotoymaps__container"><ymaps class="ymaps-2-1-79-gotoymaps__pin"></ymaps><ymaps class="ymaps-2-1-79-gotoymaps__text-container"><ymaps class="ymaps-2-1-79-gotoymaps__text">Открыть в Яндекс.Картах</ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-gototaxi" title="Доехать на такси" style="display: none;"><ymaps class="ymaps-2-1-79-gototaxi__container"><ymaps class="ymaps-2-1-79-gototaxi__pin"></ymaps><ymaps class="ymaps-2-1-79-gototaxi__text-container"><ymaps class="ymaps-2-1-79-gototaxi__text"></ymaps></ymaps></ymaps></ymaps><a class="ymaps-2-1-79-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps ">Создать свою карту</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 5403;"><ymaps class="ymaps-2-1-79-controls__toolbar" style="margin-top: 10px;"><ymaps class="ymaps-2-1-79-controls__toolbar_left"><ymaps style="margin-right: 0px; margin-left: 10px; position: inherit;" class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 90px" title="Определить ваше местоположение"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_geolocation"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps><ymaps style="margin-right: 0px; margin-left: 10px; position: inherit;" class="ymaps-2-1-79-controls__control_toolbar"><ymaps><ymaps class="ymaps-2-1-79-searchbox"><ymaps id="id_164484537127744206778" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-icon" style="max-width: 72px" title="Найти"><ymaps class="ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text">Найти</ymaps></ymaps></ymaps></ymaps><ymaps id="id_164484537127744206779"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__toolbar_right"><ymaps style="margin-right: 10px; margin-left: 0px; position: inherit;" class="ymaps-2-1-79-controls__control_toolbar"><ymaps><ymaps class="ymaps-2-1-79-traffic"><ymaps id="id_164484537127744206788" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-float-button_traffic_left" style=""><ymaps class="ymaps-2-1-79-traffic__icon ymaps-2-1-79-traffic__icon_icon_off ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"><ymaps>Пробки</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps></ymaps><ymaps id="id_164484537127744206789"><ymaps><ymaps class="ymaps-2-1-79-traffic__panel ymaps-2-1-79-popup ymaps-2-1-79-popup_direction_down ymaps-2-1-79-popup_to_bottom ymaps-2-1-79-popup_theme_ffffff ymaps-2-1-79-user-selection-none" unselectable="on" style="width: 270px;"><ymaps class="ymaps-2-1-79-traffic__tail ymaps-2-1-79-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-traffic__panel-content"><ymaps id="id_164484537127744206790"><ymaps><ymaps class="ymaps-2-1-79-traffic__switcher"><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_actual ymaps-2-1-79-traffic__switcher-item_selected_yes">Сейчас</ymaps><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_archive">Статистика</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps><ymaps></ymaps><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="margin-right: 10px; margin-left: 0px; position: inherit;" class="ymaps-2-1-79-controls__control_toolbar"><ymaps><ymaps class="ymaps-2-1-79-listbox ymaps-2-1-79-listbox_opened_no ymaps-2-1-79-listbox_align_right" style="width: 69px;"><ymaps class="ymaps-2-1-79-listbox__button ymaps-2-1-79-_visible-arrow ymaps-2-1-79-_hidden-icon ymaps-2-1-79-user-selection-none" unselectable="on" title=""><ymaps class="ymaps-2-1-79-listbox__button-icon"></ymaps><ymaps class="ymaps-2-1-79-listbox__button-text">Слои</ymaps><ymaps class="ymaps-2-1-79-listbox__button-arrow"></ymaps></ymaps><ymaps class="ymaps-2-1-79-listbox__panel ymaps-2-1-79-i-custom-scroll" style="transform: translate3d(0px, 0px, 0px) scale(1, 1);"><ymaps class="ymaps-2-1-79-listbox__list" style="max-height: 999999px;"><ymaps><ymaps><ymaps id="id_164484537127744206766"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_yes"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Схема</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_164484537127744206767"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Спутник</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_164484537127744206768"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Гибрид</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_164484537127744206764"><ymaps><ymaps class="ymaps-2-1-79-listbox__list-separator"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_164484537127744206765"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Панорамы</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="margin-right: 10px; margin-left: 0px; position: inherit;" class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title=""><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_expand"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__bottom" style="top: 450px;"><ymaps style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;" class="ymaps-2-1-79-controls__control"><ymaps><ymaps style="display: block;"><ymaps style="display: inline-block; height: 100%; vertical-align: top;"><ymaps id="id_164484537127744206769"><ymaps><ymaps class="ymaps-2-1-79-scaleline" style="width: 78px;"><ymaps class="ymaps-2-1-79-scaleline__left"><ymaps class="ymaps-2-1-79-scaleline__left-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__left-line"></ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__center"><ymaps class="ymaps-2-1-79-scaleline__label">6&nbsp;км</ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__right"><ymaps class="ymaps-2-1-79-scaleline__right-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__right-line"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="display: inline-block; width: 10px; height: 0"></ymaps><ymaps style="display: inline-block;"><ymaps id="id_164484537127744206770" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title="Измерение расстояний на карте"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_ruler"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;" class="ymaps-2-1-79-controls__control"><ymaps><ymaps class="ymaps-2-1-79-zoom" style="height: 150px"><ymaps class="ymaps-2-1-79-zoom__plus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__minus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__scale"><ymaps class="ymaps-2-1-79-zoom__runner ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-zoom__runner__transition ymaps-2-1-79-touch-action-none ymaps-2-1-79-user-selection-none" unselectable="on" style="top: 71px;"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_runner"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchpanel-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 7810;"><ymaps><ymaps class="ymaps-2-1-79-search ymaps-2-1-79-search_layout_panel ymaps-2-1-79-searchbox__panel-layout"><ymaps class="ymaps-2-1-79-search__layout"><ymaps id="id_164484537127744206780"><ymaps><ymaps class="ymaps-2-1-79-searchbox__input-cell"><ymaps class="ymaps-2-1-79-searchbox-input"><input class="ymaps-2-1-79-searchbox-input__input" placeholder="Адрес или объект"><ymaps class="ymaps-2-1-79-searchbox-input__clear-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox-list-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__button-cell"><ymaps class="ymaps-2-1-79-searchbox-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-searchbox-button-text">Найти</ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__fold-button-cell"><ymaps class="ymaps-2-1-79-searchbox__fold-button"><ymaps class="ymaps-2-1-79-searchbox__fold-button-icon"></ymaps></ymaps></ymaps></ymaps><ymaps id="id_164484537127744206781"><ymaps><ymaps class="ymaps-2-1-79-islets_serp-popup ymaps-2-1-79-islets__hidden"><ymaps class="ymaps-2-1-79-islets_serp-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-islets_serp" style="max-height: 400px;"><ymaps id="id_164484537127744206782"><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2405;"><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 294px; top: 212px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon_a.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 291px; top: 161px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 372px; top: 95px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 352px; top: 135px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 359px; top: 198px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 371px; top: 362px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 419px; top: 122px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 415px; top: 253px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -30px; top: -30px; width: 30px; height: 30px; opacity: 1; background-position: 0px 0px; background-size: 30px 30px; background-image: url(&quot;https://ctoma.ru/themes/my_theme/bem/blocks/searchMap/img/map_icon.png&quot;);"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></div></div></div></div> <div class="searchMap__routes width width_norm width_paddingStandart"><span>Построить маршрут на автомобиле</span> <span>Общественном транспорте</span> <span>Пешком</span></div></div>
    <div class="subscription width width_full">
        <span class="subscription__title width width_norm width_paddingStandart">ХОТИТЕ ПЕРВЫМИ УЗНАВАТЬ ОБ АКЦИЯХ?</span>
        <div class="subscription__content width width_norm width_paddingStandart">
            <div id="block-podpiska" class="block block-podpiska">




                <form class="webform-submission-form webform-submission-add-form webform-submission-podpiska-form webform-submission-podpiska-add-form webform-submission-podpiska-taxonomy_term-34-form webform-submission-podpiska-taxonomy_term-34-add-form subscription js-webform-details-toggle webform-details-toggle" data-drupal-selector="webform-submission-podpiska-taxonomy-term-34-add-form" action="/stomatology/diagnostika" method="post" id="webform-submission-podpiska-taxonomy-term-34-add-form" accept-charset="UTF-8" data-drupal-form-fields="edit-email,edit-actions-submit,edit-agreement">

                    <div class="subscription__name js-form-item form-item js-form-type-textfield form-item-email js-form-item-email form-no-label">

                        <label for="edit-email" class="visually-hidden js-form-required form-required">Введите Ваш email</label>

                        <input autocomplete="off" data-drupal-selector="edit-email" type="text" id="edit-email" name="email" value="" size="60" maxlength="255" placeholder="Введите Ваш email" class="form-text required" required="required" aria-required="true">


                    </div>
                    <div class="subscription__actions form-actions webform-actions js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions"><button class="webform-button--submit button button--primary js-form-submit form-submit" data-drupal-selector="edit-actions-submit" type="submit" id="edit-actions-submit" name="op" value="Подписаться">Подписаться</button>

                    </div>
                    <div class="subscription__agreement js-form-item form-item js-form-type-checkbox form-item-agreement js-form-item-agreement">


                        <input data-drupal-selector="edit-agreement" type="checkbox" id="edit-agreement" name="agreement" value="1" checked="checked" class="form-checkbox required" required="required" aria-required="true">


                        <label for="edit-agreement" class="option js-form-required form-required">Даю согласие на <a href="/agreement" target="_blank">обработку персональных</a> данных</label>
                    </div>
                    <input autocomplete="off" data-drupal-selector="form-yekld-50hdzg8pvw-7nko1oz6p-gze9oegnnjdfwd9o" type="hidden" name="form_build_id" value="form-yekld-50HDzg8PvW-7NKO1oz6P-GZE9OegNNjdfwd9o">
                    <input data-drupal-selector="edit-webform-submission-podpiska-taxonomy-term-34-add-form" type="hidden" name="form_id" value="webform_submission_podpiska_taxonomy_term_34_add_form">



                </form>

            </div>

        </div>
    </div>


    <div id="actionsHome" xmlns:v-bind="http://www.w3.org/1999/xhtml" class="actions width width_full"><div class="actions__title title_home width width_norm width_paddingStandart"><span class="title__br"></span><span class="title__text">Акции</span><span class="title__br"></span></div> <div class="actions__content width width_paddingStandart"><div class="actions__slider width width_full"><div class="actions__swiper swiper-container swiper-container-horizontal swiper-container-fade"><div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="9" style="width: 1873px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-09/stoma_%D1%87%D0%B8%D1%81%D1%82%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D0%BA%D0%B5.jpg?itok=88VBu4qK" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" hreflang="ru">Профчистка на Петроградке за 1950 рублей</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>В клинике на Петроградке до 28 февраля 2022 года проходит акция "Профессиональная чистка зубов всего за 1950 рублей".</p>

<p>В акции участвуют врачи со стажем до двух лет. ЛОВИ МОМЕНТ!</p>

<p>Прозрачная и честная цена за полный комплект услуг и консультации трёх врачей!</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=13626" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 1873px; transform: translate3d(-1873px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2022-02/%D1%81%D0%BA%D0%B8%D0%B4%D0%BA%D0%B0%2010%25%20%D1%82%D0%B5%D1%80%D0%B0%D0%BF%D0%B8%D1%8F%20%D0%904%20%281%29.jpg?itok=W64yEmgW" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" hreflang="ru">Скидка 10% на терапевтическое лечение!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>С 01 по 28 февраля 2022 г. во всех клиниках "СТОМА" действует скидка 10% на терапевтическое лечение!&nbsp;</p>

<p>Акция не распространяется&nbsp;на&nbsp;общий&nbsp;наркоз, седацию и отбеливание.</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=14052" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 1873px; transform: translate3d(-3746px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/professionalnaa-cistka-zubov-za-1450-rublei-1" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-12/Instagram-%D1%80%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D0%B0%201080x1080%20%20.jpeg?itok=o1E4w9U8" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/professionalnaa-cistka-zubov-za-1450-rublei-1" hreflang="ru">Профессиональная чистка зубов всего за 1950/2250 рублей!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>До 15 февраля 2022 года в клиниках "СТОМА" проходит акция "Профессиональная чистка зубов всего за 1950/2250 рублей":</p>

<ul><li>
	<p>Профгигиена за 1950 рублей - у врачей со стажем до 2-х лет.&nbsp;&nbsp;Акция действует во всех клиниках "СТОМА", кроме клиники на Савушкина.</p>
	</li>
	<li>
	<p>Профгигиена за 2250 рублей - у врачей третьего года стажа. Акция действует во всех клиниках, кроме Московского</p>
	</li>
</ul></span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/professionalnaa-cistka-zubov-za-1450-rublei-1" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=3517" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="2" style="width: 1873px; transform: translate3d(-5619px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/lechenie-lyubogo-kariesa-vsego-za-1450-rublej2" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-10/KARIES_2950R%20%282%29%20%281%29%20%281%29.jpg?itok=4gpd4g5c" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/lechenie-lyubogo-kariesa-vsego-za-1450-rublej2" hreflang="ru">Лечение  любого кариеса всего за 2950 рублей!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>&nbsp;До 28 февраля 2022&nbsp; года в&nbsp;клиниках "СТОМА"&nbsp; &nbsp;проводится акция&nbsp;«Лечение любого&nbsp; кариеса всего за 2950 рублей!»*&nbsp;<br>
&nbsp;</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/lechenie-lyubogo-kariesa-vsego-za-1450-rublej2" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=471" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="3" style="width: 1873px; transform: translate3d(-7492px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/panoramnyi-snimok-zubov-vsego-za-990-rublei" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-07/%D0%94%D0%B8%D0%B0%D0%B3%D0%BD%D0%BE%D1%81%D1%82%D0%B8%D0%BA%D0%B0%20%D0%B7%D0%B0%20990%D1%80%20%20%D0%B04.png?itok=MoqgOoqE" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/panoramnyi-snimok-zubov-vsego-za-990-rublei" hreflang="ru">Панорамный снимок зубов всего за 990 рублей! Консультации 3-х врачей - в подарок!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>До 28 февраля 2022&nbsp;года в&nbsp; клинике по адресу: ул. Ленина, 22&nbsp; проходит акция: "Панорамный снимок зубов&nbsp;всего за 990 рублей!" Консультация трёх врачей - в подарок!</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/panoramnyi-snimok-zubov-vsego-za-990-rublei" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=3616" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="4" style="width: 1873px; transform: translate3d(-9365px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/zdorovye-zuby-s-detstva-kompleks-professionalnoi-gigieny-i-remoterapii-dla-detei-za-2700" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-09/%D0%9F%D0%93%20%2B%D1%80%D0%B5%D0%BC%D0%BE%20%D0%B7%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D1%8B%D0%B5%20%D0%B7%D1%83%D0%B1%D1%8B%20%D1%81%20%D1%81%20%D0%B4%D0%B5%D1%82%D1%81%D1%82%20%D1%81%D0%B6%D0%B0%D1%82%D1%8B%D0%B9.jpg?itok=rBGpilVk" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/zdorovye-zuby-s-detstva-kompleks-professionalnoi-gigieny-i-remoterapii-dla-detei-za-2700" hreflang="ru">Здоровые зубы с детства! </a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>До 28 февраля 2022 года в клиниках&nbsp;«СТОМА» проводится акция «Здоровые зубы с детства! Комплекс профессиональной гигиены и ремотерапии (укрепление эмали)&nbsp;для детей &nbsp;за 2900 рублей» (вместо 3900 рублей).&nbsp;</p>

<p>Консультация хирурга и ортодонта в подарок!</p>

<p>Акция проходит в клиниках по адресам:</p>

<ul><li>ул. Савушкина, 135&nbsp;</li>
	<li>ул. Ленина, 22</li>
	<li>Коломяжский пр-кт, 26</li>
	<li>пр-кт Науки, 17</li>
</ul></span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/zdorovye-zuby-s-detstva-kompleks-professionalnoi-gigieny-i-remoterapii-dla-detei-za-2700" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=11601" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="5" style="width: 1873px; transform: translate3d(-11238px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/protezirovanie-pod-kluc-implant-koronka-iz-dioksida-cirkonia" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-09/%D0%BF%D1%80%D0%BE%D1%82%D0%B5%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%D0%B4%20%D0%BA%D0%BB%D1%8E%D1%87%20%D0%BF%D1%80%D0%B5%D1%82%D0%B0%D1%83%20%D0%BE%D0%BA%D1%8221.jpg?itok=weHnX7UX" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/protezirovanie-pod-kluc-implant-koronka-iz-dioksida-cirkonia" hreflang="ru">Протезирование под ключ: имплант + коронка из диоксида циркония</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>До 28 февраля 2022&nbsp;года в клиниках "СТОМА"&nbsp; действует акция "Протезирование&nbsp;под ключ: коронка+имплант".</p>

<p>Акция проходит в следующих клиниках:</p>

<ul><li>Ленина, 22</li>
	<li>Невский, 163</li>
	<li>Кораблестроителей, 32/3</li>
</ul></span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/protezirovanie-pod-kluc-implant-koronka-iz-dioksida-cirkonia" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=7298" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="6" style="width: 1873px; transform: translate3d(-13111px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/protezirovanie-pod-kluc-implant-metallokeramiceskaa-koronka" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-09/%D0%BF%D1%80%D0%BE%D1%82%D0%B5%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%D0%B4%20%D0%BA%D0%BB%D1%8E%D1%87%20%D0%BC%D0%B5%D1%82%D0%B0%D0%BB2%20%D0%BE%D0%BA%D1%8221.jpg?itok=2IaoJx8b" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/protezirovanie-pod-kluc-implant-metallokeramiceskaa-koronka" hreflang="ru">Протезирование под ключ: имплант + металлокерамическая коронка</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>До 28 февраля 2022 года в клиниках «СТОМА»&nbsp; действует акция "Протезирование&nbsp;под ключ: коронка+имплант".<br>
Акция проходит в следующих клиниках:</p>

<ul><li>ул.Ленина, 22</li>
	<li>Невский пр., 163</li>
	<li>Кораблестроителей 32/3</li>
</ul></span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/protezirovanie-pod-kluc-implant-metallokeramiceskaa-koronka" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=7301" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="7" style="width: 1873px; transform: translate3d(-14984px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/belosnezhnaya-ulybka-v-den-rozhdeniya-vsego-za-2400" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-12/%D0%BC%D0%B0%D0%BA%D0%B5%D1%82%20%D0%A1%D0%BA%D0%B8%D0%B4%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D0%94%D0%A0.jpg?itok=dWyXVSKQ" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/belosnezhnaya-ulybka-v-den-rozhdeniya-vsego-za-2400" hreflang="ru">Белоснежная улыбка в День Рождения всего за 3200 рублей!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>Акция "ПРОФЕССИОНАЛЬНАЯ ЧИСТКА ЗУБОВ всего за&nbsp;3200 рублей"&nbsp; действует до 28 февраля 2022 года.</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/belosnezhnaya-ulybka-v-den-rozhdeniya-vsego-za-2400" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=475" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide" data-swiper-slide-index="8" style="width: 1873px; transform: translate3d(-16857px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akcia/implant-connical" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-12/%D0%9C%D0%B0%D0%BA%D0%B5%D1%82%20%D0%B8%D0%BC%D0%BF%D0%BB%D0%B0%D0%BD%D1%82%D0%B0%D1%82%20%283%29.jpg?itok=VjFdUJEQ" width="221" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akcia/implant-connical" hreflang="ru"> Имплант "Nobel Parallel CC"  с установкой всего за 39900 рублей</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>&nbsp;Во всех клиниках «СТОМА» до 28 февраля 2022 года проводится акция "Имплант Nobel Parallel CC" всего за 39 900 рублей». Экономия - 5000 рублей!<br>
&nbsp;</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akcia/implant-connical" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=10257" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="9" style="width: 1873px; transform: translate3d(-18730px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2021-09/stoma_%D1%87%D0%B8%D1%81%D1%82%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D0%BA%D0%B5.jpg?itok=88VBu4qK" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" hreflang="ru">Профчистка на Петроградке за 1950 рублей</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>В клинике на Петроградке до 28 февраля 2022 года проходит акция "Профессиональная чистка зубов всего за 1950 рублей".</p>

<p>В акции участвуют врачи со стажем до двух лет. ЛОВИ МОМЕНТ!</p>

<p>Прозрачная и честная цена за полный комплект услуг и консультации трёх врачей!</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akciya/profchistka-na-petrogradke-za-1950-rubley" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=13626" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 1873px; transform: translate3d(-20603px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="actions__wrap"><div class="actions__img">  <a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" hreflang="ru"><img src="/sites/default/files/styles/190x300/public/2022-02/%D1%81%D0%BA%D0%B8%D0%B4%D0%BA%D0%B0%2010%25%20%D1%82%D0%B5%D1%80%D0%B0%D0%BF%D0%B8%D1%8F%20%D0%904%20%281%29.jpg?itok=W64yEmgW" width="212" height="300" alt="" typeof="foaf:Image">

                                    </a>
                                </div> <div class="actions__info"><span class="actions__infoTitle"><a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" hreflang="ru">Скидка 10% на терапевтическое лечение!</a></span> <span class="actions__srok"><label>Срок действия акции:</label> <span>28-02-2022</span></span> <span class="actions__srokText"><noindex><span><p>С 01 по 28 февраля 2022 г. во всех клиниках "СТОМА" действует скидка 10% на терапевтическое лечение!&nbsp;</p>

<p>Акция не распространяется&nbsp;на&nbsp;общий&nbsp;наркоз, седацию и отбеливание.</p>
</span></noindex></span> <span class="actions__short"><noindex><span></span></noindex></span> <span class="actions__actions"><a href="/akciya/prazdnichnaya-skidka-10-na-terapevticheskoe-lechenie" class="actions__more">Подробности</a> <a href="/form/zapisatsa-po-akcii?action_nid=14052" data-dialog-options="{&quot;width&quot;:&quot;500px&quot;,&quot;minHeight&quot;:&quot;800px&quot;,&quot;dialogClass&quot;:&quot;popupDialog&quot;}" data-dialog-type="modal" class="actions__zapis use-ajax">Записаться</a></span></div></div></div></div> <div class="actions__swiperButtonNext swiper-button-next swiper-button-white"></div> <div class="actions__swiperButtonPrev swiper-button-prev swiper-button-white"></div></div></div></div></div>

    <style>
        .actions__swiper.swiper-container{
            max-height: 100%
        }
    </style>
    <div id="reviewsHome" xmlns:v-bind="http://www.w3.org/1999/xhtml" class="reviews width width_full"><div class="reviews__title title_homeWhite width width_norm width_paddingStandart"><span class="title__br"></span><span class="title__text">Отзывы</span><span class="title__br"></span></div> <div class="reviews__content width width_paddingStandart"><div class="reviews__slider width width_full"><div class="reviews__swiper swiper-container swiper-container-horizontal swiper-container-fade"><div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="9" style="width: 1873px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/personal/hiryrg/rotar-denis-stanislavovich"><img src="/sites/default/files/2021-10/%D0%A0%D0%BE%D1%82%D0%B0%D1%80%D1%8C%20%D0%94%D0%A1%20%D1%81%D0%B6%D0%B0%D1%82%D1%8B%D0%B9%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0.jpg" width="320" height="320" alt="Отзыв о враче Ротарь Денис Станиславович" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/personal/hiryrg/rotar-denis-stanislavovich"><span>Ротарь Денис Станиславович</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>хирург-имплантолог </div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-ul-savushkina" hreflang="ru">Клиника на Савушкина (м. Беговая)</a></li>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                            <li><a href="/clinics/klinika-na-mosovskom-prospekte" hreflang="ru">Клиника на Московском (м. Московская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Лютянская Н.В.</span> <span class="otzyvDefault__otDate">04/02/2022</span></div> <div class="otzyvDefault__body"><p>Выражаю большую благодарность врачам Ротарю Денису Станиславовичу и Алексеевой Екатерине Юрьевне за высокий профессионализм и внимательное отношение к пациентам. Они не только качественно выполняют свою работу, но и находят к людям индивидуальный подход. Прошу отметить их труд материальным вознаграждением.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/anonimno-31012022" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 1873px; transform: translate3d(-1873px, 0px, 0px); opacity: 1; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrac/sokolov-artem-aleksandrovic"><img src="/sites/default/files/2021-02/%D0%A1%D0%BE%D0%BA%D0%BE%D0%BB%D0%BE%D0%B2%20%D0%90c.jpg" width="320" height="320" alt="Отзыв о враче Соколов Артём Александрович" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrac/sokolov-artem-aleksandrovic"><span>Соколов Артём Александрович</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Стоматолог-терапевт</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Леврентьева Т.</span> <span class="otzyvDefault__otDate">11/02/2022</span></div> <div class="otzyvDefault__body"><p>Благодарю доктора Артёма Алекандровича Соколова за профессионализм, внимание к пациенту.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/levrenteva-t" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 1873px; transform: translate3d(-3746px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrach/kilomatov-turpal-alievich"><img src="/sites/default/files/2021-07/%D0%9A%D0%B8%D0%BB%D0%BE%D0%BC%D0%B0%D1%82%D0%BE%D0%B2%20%D0%A2%20.jpg" width="320" height="320" alt="Отзыв о враче Киломатов Турпал Алиевич" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrach/kilomatov-turpal-alievich"><span>Киломатов Турпал Алиевич</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Врач-стоматолог-терапевт</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-nevskom-prospekte" hreflang="ru">Клиника на Невском (м. пл. Ал. Невского)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Степанова Елена Валерьевна</span> <span class="otzyvDefault__otDate">11/02/2022</span></div> <div class="otzyvDefault__body"><p>Была у врача Киломатова Турпала Алиевича, замечательный специалист, очень отзывчивый, чуткий. К работе подходит ответственно, тщательно. Мне очень понравился как специалист, советую всем!</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/stepanova-elena-valerevna" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="2" style="width: 1873px; transform: translate3d(-5619px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Грибанова Светлана Владимировна</span> <span class="otzyvDefault__otDate">09/02/2022</span></div> <div class="otzyvDefault__body"><p>Уважаемые руководители клиники! Прошу Вас обратить внимание на профессиональную и быструю работу вашего сотрудника Нестеровой Елены Федоровны. Имея большой опыт общения по вопросам оформления документов с различными организациями.хочу отметить,что в вашей клиники данная работа поставлена на высокий уровень с глубоким знанием законодательства.Большое спасибо за вашу работу и внимание к пациентам.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/gribanova-svetlana-vladimirovna" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="3" style="width: 1873px; transform: translate3d(-7492px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrac/avanesova-valeria-armenovna"><img src="/sites/default/files/2021-02/%D0%90%D0%B2%D0%B0%D0%BD%D0%B5%D1%81%D0%BE%D0%B2%D0%B0%20%D0%92%D0%90%20%D0%B8%D0%B7%D0%BC%20%D0%B1%D0%B5%D0%B9%D0%B4%D0%B6.jpg" width="320" height="320" alt="Отзыв о враче Аванесова Валерия Арменовна" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrac/avanesova-valeria-armenovna"><span>Аванесова Валерия Арменовна</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Стоматолог-терапевт</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-lenina" hreflang="ru">Клиника на Ленина (м. Петроградская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Анна</span> <span class="otzyvDefault__otDate">09/02/2022</span></div> <div class="otzyvDefault__body"><p>Была на проф. гигиене у Валерии. Приятная, внимательная девушка. Очень довольна оказанными услугами. Зубки, как новые) Спасибо!</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/anna-2" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="4" style="width: 1873px; transform: translate3d(-9365px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/personal/hirurg/cahhaev-uzdan-abacaraevic"><img src="/sites/default/files/2020-03/%D0%A6%D0%B0%D1%85%D1%85%D0%B0%D0%B5%D0%B2%20%D0%A3%D0%90.png" width="320" height="320" alt="Отзыв о враче Цаххаев Уздан Абачараевич" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/personal/hirurg/cahhaev-uzdan-abacaraevic"><span>Цаххаев Уздан Абачараевич</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Хирург-имплантолог</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                            <li><a href="/clinics/klinika-na-prospekte-nauki" hreflang="ru">Клиника на Науки (м. Академическая)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Анастасия</span> <span class="otzyvDefault__otDate">08/02/2022</span></div> <div class="otzyvDefault__body"><p>Прекрасный врач! Тактично, без боли выполняет свою работу, все поясняет, даёт рекомендации. Очень рада, что когда-то попала к нему на чистку, а после стала постоянной пациенткой. Рекомендую)</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/anastasiya-0" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="5" style="width: 1873px; transform: translate3d(-11238px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/personal/terapy/bykova-marina-valerevna"><img src="/sites/default/files/2019-08/%D0%91%D1%8B%D0%BA%D0%BE%D0%B2%D0%B0%20%D0%9C.%D0%92.%20%D1%81%D0%B0%D0%B9%D1%82.jpg" width="320" height="320" alt="Отзыв о враче Быкова Марина Валерьевна" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/personal/terapy/bykova-marina-valerevna"><span>Быкова Марина Валерьевна</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>стоматолог-терапевт, хирург</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Богданова Ольга Богдановна</span> <span class="otzyvDefault__otDate">07/02/2022</span></div> <div class="otzyvDefault__body"><p>обратились с сыном 5-ти лет по рекомендации подруги. я очень боялась за ребенка, но сын все манипуляции воспринял как приключение. врач сделала все для того чтобы сын не боялся лечить зубы. и вот уже пятый год, сын понимает необходимость осмотров, лечения и иногда удаления. Марина Валерьевна это просто находка для детей и родителей.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/bogdanova-olga-bogdanovna" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="6" style="width: 1873px; transform: translate3d(-13111px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrach/shkuropat-darya-andreevna"><img src="/sites/default/files/2021-12/%D0%A8%D0%BA%D1%83%D1%80%D0%BE%D0%BF%D0%B0%D1%82%20%D0%94.%D0%90.jpg" width="320" height="320" alt="Отзыв о враче Старкова (Шкуропат) Дарья Андреевна" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrach/shkuropat-darya-andreevna"><span>Старкова (Шкуропат) Дарья Андреевна</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>врач стоматолог-терапевт, гигиенист </div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-korablestroitelej" hreflang="ru">Клиника на Кораблестроителей (м. Приморская)</a></li>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Саваровский А.Е.</span> <span class="otzyvDefault__otDate">04/02/2022</span></div> <div class="otzyvDefault__body"><p>Хочу выразить огромную благодарность врачам Старковой Дарье Андреевне и Чупровой Екатерине за высокий профессионализм при проведении процедуры чистки зубов мне. Спасибо большое за комфорт при нахождении в стоматологическом кресле. Девушкам большое спасибо.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/savarovskiy-ae" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="7" style="width: 1873px; transform: translate3d(-14984px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/personal/terapy/alekseeva-ekaterina-yurevna"><img src="/sites/default/files/2017-10/%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B5%D0%B2%D0%B0-min.jpg" width="320" height="320" alt="Отзыв о враче Алексеева Екатерина Юрьевна" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/personal/terapy/alekseeva-ekaterina-yurevna"><span>Алексеева Екатерина Юрьевна</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>стоматолог-терапевт, ортопед</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Лютянская Н.В.</span> <span class="otzyvDefault__otDate">04/02/2022</span></div> <div class="otzyvDefault__body"><p>Выражаю большую благодарность врачам Ротарю Денису Станиславовичу и Алексеевой Екатерине Юрьевне за высокий профессионализм и внимательное отношение к пациентам. Они не только качественно выполняют свою работу, но и находят к людям индивидуальный подход. Прошу отметить их труд материальным вознаграждением.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/lyutyanskaya-nv" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide" data-swiper-slide-index="8" style="width: 1873px; transform: translate3d(-16857px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrach/zyamilov-ilnur-ildarovich"><img src="/sites/default/files/2021-11/%D0%94%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%97%D1%8F%D0%BC%D0%B8%D0%BB%D0%BE%D0%B2%20.jpg" width="320" height="320" alt="Отзыв о враче Зямилов Ильнур Илдарович" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrach/zyamilov-ilnur-ildarovich"><span>Зямилов Ильнур Илдарович</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Стоматолог-терапевт</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-korablestroitelej" hreflang="ru">Клиника на Кораблестроителей (м. Приморская)</a></li>
                                                            <li><a href="/clinics/klinika-na-nevskom-prospekte" hreflang="ru">Клиника на Невском (м. пл. Ал. Невского)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Степанова Елена Викторовна</span> <span class="otzyvDefault__otDate">04/02/2022</span></div> <div class="otzyvDefault__body"><p>Была сегодня на приеме у доктора Зямилова Ильнура Илдаровича. Он замечательный, профессионал своего дела. Я просто в восторге, все рассказал, дал рекомендации. Буду в дальнейшем посещать данного врача и посоветую всем своим знакомым. Он просто душка.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/stepanova-elena-viktorovna" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="9" style="width: 1873px; transform: translate3d(-18730px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/personal/hiryrg/rotar-denis-stanislavovich"><img src="/sites/default/files/2021-10/%D0%A0%D0%BE%D1%82%D0%B0%D1%80%D1%8C%20%D0%94%D0%A1%20%D1%81%D0%B6%D0%B0%D1%82%D1%8B%D0%B9%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0.jpg" width="320" height="320" alt="Отзыв о враче Ротарь Денис Станиславович" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/personal/hiryrg/rotar-denis-stanislavovich"><span>Ротарь Денис Станиславович</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>хирург-имплантолог </div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-ul-savushkina" hreflang="ru">Клиника на Савушкина (м. Беговая)</a></li>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                            <li><a href="/clinics/klinika-na-mosovskom-prospekte" hreflang="ru">Клиника на Московском (м. Московская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Лютянская Н.В.</span> <span class="otzyvDefault__otDate">04/02/2022</span></div> <div class="otzyvDefault__body"><p>Выражаю большую благодарность врачам Ротарю Денису Станиславовичу и Алексеевой Екатерине Юрьевне за высокий профессионализм и внимательное отношение к пациентам. Они не только качественно выполняют свою работу, но и находят к людям индивидуальный подход. Прошу отметить их труд материальным вознаграждением.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/anonimno-31012022" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 1873px; transform: translate3d(-20603px, 0px, 0px); opacity: 0; transition-duration: 0ms;"><div class="otzyvDefault otzyvDefault_short width width_light"><span class="otzyvDefault__podlojka"></span> <div class="otzyvDefault__content"><div class="otzyvDefault__top"><div><div class="otzyvDefault__vrach width_paddingStandart">



                                                <div>  <a href="/vrac/sokolov-artem-aleksandrovic"><img src="/sites/default/files/2021-02/%D0%A1%D0%BE%D0%BA%D0%BE%D0%BB%D0%BE%D0%B2%20%D0%90c.jpg" width="320" height="320" alt="Отзыв о враче Соколов Артём Александрович" typeof="foaf:Image"></a></div>



                                                <div class="otzyvDefault__name">
                                                    <a href="/vrac/sokolov-artem-aleksandrovic"><span>Соколов Артём Александрович</span>
                                                    </a>
                                                </div>
                                                <div class="otzyvDefault__dolznost">


                                                    <div>Стоматолог-терапевт</div>

                                                </div>

                                                <div class="otzyvDefault__mestaRaboty">
                                                    <label>Место работы:</label>


                                                    <div>
                                                        <ul>
                                                            <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника на Сикейроса (м. Озерки)</a></li>
                                                            <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte" hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div></div> <div class="otzyvDefault__info width_paddingStandart"><div class="otzyvDefault__ot"><label>ОТ:</label> <span class="otzyvDefault__otName">Леврентьева Т.</span> <span class="otzyvDefault__otDate">11/02/2022</span></div> <div class="otzyvDefault__body"><p>Благодарю доктора Артёма Алекандровича Соколова за профессионализм, внимание к пациенту.</p>
                                            </div></div></div> <div class="otzyvButtonWrapper"><div class="otzyvDefault__more"></div> <div class="otzyvDefault__more"><a href="/otzyvy/levrenteva-t" class="button_red">Подробнее</a></div> <div class="otzyvDefault__more"><a href="/reviews/add" class="button_red">Оставить отзыв</a></div></div></div></div></div></div> <div class="reviews__swiperButtonNext swiper-button-next swiper-button-white"></div> <div class="reviews__swiperButtonPrev swiper-button-prev swiper-button-white"></div></div></div></div></div>
    <div class="ask width width_full" v-if="show">
        <div class="ask__title title_homeRed width width_norm width_paddingStandart">
            <span class="title__br"></span><h2 class="title__text">Задайте вопрос</h2><span class="title__br"></span>
        </div>
        <div class="ask__content width width_light width_paddingStandart">
            <div class="ask__col1">
                <div class="views-element-container"><div>








                        <div class="views-row">
                            <div class="questionTeaser">
                                <div class="questionTeaser__content width width_light">

                                    <div class="questionTeaser__question content_norm">
                                        <label>Вопрос:</label>
                                        <div>Добрый день, что необходимо для получения справки для налоговой (получение вычета) о стоимости оказанных услуг?</div>

                                        <div class="questionTeaser__date">
                                            12/02/2022
                                        </div>
                                    </div>

                                    <div class="questionTeaser__more">
                                        <a class="button_red" href="/voprosy-i-otvety/vopros-otvet-7700">Посмотреть ответ</a>
                                    </div>
                                </div>
                            </div>







                        </div>
                        <div class="views-row">
                            <div class="questionTeaser">
                                <div class="questionTeaser__content width width_light">

                                    <div class="questionTeaser__question content_norm">
                                        <label>Вопрос:</label>
                                        <div>Есть ли у вас вакансии стоматологом - терапевтом? Хотел бы у вас устроиться, наслышал о замечательном коллективе</div>

                                        <div class="questionTeaser__date">
                                            12/02/2022
                                        </div>
                                    </div>

                                    <div class="questionTeaser__more">
                                        <a class="button_red" href="/voprosy-i-otvety/vopros-otvet-7699">Посмотреть ответ</a>
                                    </div>
                                </div>
                            </div>







                        </div>
                        <div class="views-row">
                            <div class="questionTeaser">
                                <div class="questionTeaser__content width width_light">

                                    <div class="questionTeaser__question content_norm">
                                        <label>Вопрос:</label>
                                        <div>Здравствуйте, есть ли шанс ,остановить генетическое заболевание зубов( врожденная гипоплазия эмали на всех зубах,и молочных и постоянных, передалось от матери(меня) трем детям- дочки. началась патология с меня </div>

                                        <div class="questionTeaser__date">
                                            09/02/2022
                                        </div>
                                    </div>

                                    <div class="questionTeaser__more">
                                        <a class="button_red" href="/voprosy-i-otvety/vopros-otvet-7690">Посмотреть ответ</a>
                                    </div>
                                </div>
                            </div>







                        </div>









                    </div></div>

            </div>

            <div class="ask__bottom">
                <a href="/questions" class="button_red">Все вопросы</a>

                <a href="/form/zadat-vopros" class="use-ajax button_blue" data-dialog-options="{
                                &quot;width&quot;:&quot;500px&quot;,
                                &quot;minHeight&quot;:&quot;500px&quot;,
                                &quot;dialogClass&quot;:&quot;popupDialog&quot;
                                }" data-dialog-type="modal">Задать вопрос</a>

            </div>
        </div>
    </div>
</div>



