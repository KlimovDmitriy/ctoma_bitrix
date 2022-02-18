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
    <h1 class="service__titleText title_norm width width_norm width_paddingStandart"><div><? echo $name; ?></div></h1>
</div>

<div class="wrapPortfolioInfo">
    <div class="twentytwentyBlock">
        <div class="twentytwenty-wrapper"><div class="twentytwenty-container" style="height: 390.75px;">
                <div>
                    <div>Фото до</div>
                    <div>
                        <img alt="" class="twentytwenty-before lazyloaded" data-src="/sites/default/files/2021-09/322342.png" typeof="foaf:Image" style="clip: rect(0px, 200px, 390.75px, 0px);" src="/sites/default/files/2021-09/322342.png" width="1037" height="1013">
                    </div>
                </div>
                <div>
                    <div>Фото после</div>
                    <div>  <img alt="Отбеливание системой Zoom 4 - после" class="twentytwenty-after lazyloaded" data-src="/sites/default/files/2021-08/2_2.png" typeof="foaf:Image" src="/sites/default/files/2021-08/2_2.png" width="1037" height="1022">
                    </div>
                </div>
                <div class="twentytwenty-overlay"><div class="twentytwenty-before-label"></div><div class="twentytwenty-after-label"></div></div><div class="twentytwenty-handle" style="left: 200px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>
    </div>
    <div class="portfolioInfo">
        <div class="portDoctor"><span class="wrPortText">Врач: </span>
            <div><a href="/vrac/avanesova-valeria-armenovna" hreflang="ru">Аванесова Валерия Арменовна</a></div>
        </div>
        <div class="portDoctor"><span class="wrPortText">Клиники приема: </span>
            <div>
                <div><a href="/clinics/klinika-na-korablestroitelej" hreflang="ru">Клиника на Кораблестроителей (м. Приморская)</a></div>
            </div>
        </div>
    </div>
</div>

<div class="portContent">
    <div class="portfolioDescription">
        <div>
            <p style="border:none; margin-right:-4px">
              <span style="font-size:11pt">
                <span style="line-height:normal">
                  <span style="font-family:Arial,sans-serif">
                    <span style="font-size:12.0pt" xml:lang="ru" lang="ru">
                      <span style="background:white">Жалобы на дисколорит передней группы зубов на нижней и верхней челюсти.</span>
                    </span>
                  </span>
                </span>
              </span>
            </p>
            <p>
                <span style="font-size:12.0pt" xml:lang="ru" lang="ru">
                    <span style="background:white">
                        <span style="line-height:115%">
                            <span style="font-family:&quot;Arial&quot;,sans-serif">Отбеливание системой Zoom 4 от оттенка А2 до В1</span>
                        </span>
                    </span>
                </span>
            </p>
        </div>
    </div>
    <div class="service__zapisatsa">
        <a href="/make-an-appointment" class="button_red">Записаться</a>
    </div>

    <div class="views-element-container">
        <h2 class="portfolioBlock__title">
            <span class="title__br"></span>
            <span class="title__text">Другие работы</span>
            <span class="title__br"></span>
        </h2>
        <div class="uslugi_all width width_full width_paddingStandart">
            <div class="uslugi__content width width width_norm width_paddingStandart">
                <div class="views-element-container">
                    <div class="viewServices portfolioBlocks">
                        <div class="views-row">
                            <div class="uslugiPrevu portfolioPreview">
                                <a class="uslugiPrevu__link" href="/portfolio/primer-261">
                                    <div class="portfolioImgFix">  <img src="/sites/default/files/2021-10/os52.jpg" alt="" typeof="foaf:Image" width="400" height="287">

                                    </div>
                                    <div class="uslugiPrevu__nameWrap">
                                        <span class="uslugiPrevu__name">Лечение глубокого дистального прикуса</span>
                                    </div>
                                    <div class="uslugiPrevu__nameWrapHover">
                                        <span class="uslugiPrevu__nameHover">Лечение глубокого дистального прикуса</span>
                                        <span class="uslugiPrevu__moreHover">Узнать</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="views-row">
                            <div class="uslugiPrevu portfolioPreview">
                                <a class="uslugiPrevu__link" href="/portfolio/primer-259">
                                    <div class="portfolioImgFix">  <img src="/sites/default/files/2021-10/os31.jpg" alt="" typeof="foaf:Image" width="559" height="287">

                                    </div>
                                    <div class="uslugiPrevu__nameWrap">
                                        <span class="uslugiPrevu__name">Лечение глубокого прикуса</span>
                                    </div>
                                    <div class="uslugiPrevu__nameWrapHover">
                                        <span class="uslugiPrevu__nameHover">Лечение глубокого прикуса</span>
                                        <span class="uslugiPrevu__moreHover">Узнать</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="views-row">
                            <div class="uslugiPrevu portfolioPreview">
                                <a class="uslugiPrevu__link" href="/portfolio/primer-267">
                                    <div class="portfolioImgFix">  <img src="/sites/default/files/2021-10/os112.jpg" alt="" typeof="foaf:Image" width="400" height="287">
                                    </div>
                                    <div class="uslugiPrevu__nameWrap">
                                        <span class="uslugiPrevu__name">Лечение на керамической брекет-системе Damon Clear</span>
                                    </div>
                                    <div class="uslugiPrevu__nameWrapHover">
                                        <span class="uslugiPrevu__nameHover">Лечение на керамической брекет-системе Damon Clear</span>
                                        <span class="uslugiPrevu__moreHover">Узнать</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>