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
<div class="otzyvy__container">
    <h1 class="otzyvy__title title_grey width width_norm width_paddingStandart">
        <span class="title__br"></span><span class="title__text">Отзывы </span><span class="title__br"></span>
    </h1>
    <div class="otzyvy__actions width width_light width_paddingLeftRight">
        <a class="button_red" href="/reviews/add">Оставить отзыв</a>
    </div>
    <div class="otzyvy__content width width_norm width_paddingStandart">
        <div class="views-element-container">
            <div>

                <? foreach ($arResult['ITEMS'] as $item) { ?>
                    <div class="views-row">
                        <div class="otzyvDefault width width_light">
                            <span class="otzyvDefault__podlojka"></span>
                            <div class="otzyvDefault__content">

                                <div class="otzyvDefault__top">
                                    <div>
                                        <div class="otzyvDefault__vrach width_paddingStandart">


                                            <div><a href="/vrac/sokolov-artem-aleksandrovic"><img
                                                            src="/sites/default/files/2021-02/%D0%A1%D0%BE%D0%BA%D0%BE%D0%BB%D0%BE%D0%B2%20%D0%90c.jpg"
                                                            width="320" height="320"
                                                            alt="Отзыв о враче Соколов Артём Александрович"
                                                            typeof="foaf:Image"></a></div>


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
                                                        <li><a href="/clinics/klinika-na-sikejrosa" hreflang="ru">Клиника
                                                                на Сикейроса (м. Озерки)</a></li>
                                                        <li><a href="/clinics/klinika-na-kolomyazhskom-prospekte"
                                                               hreflang="ru">Клиника на Коломяжском (м.Пионерская)</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="otzyvDefault__info width_paddingStandart">
                                        <div class="otzyvDefault__ot">
                                            <label>ОТ:</label>
                                            <span class="otzyvDefault__otName"><?= $item['NAME']; ?></span>
                                            <span class="otzyvDefault__otDate"><?
                                                echo FormatDateFromDB($item["DATE_CREATE"], 'SHORT');
                                                ?></span>
                                        </div>
                                        <div class="otzyvDefault__body">
                                            <div>
                                                <?= html_entity_decode($item['PREVIEW_TEXT']); ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="otzyvDefault__more"><a class="button_red" href="/otzyvy/<?= $item['CODE']; ?>/">Подробнее</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <? } ?>


                <nav class="pager" role="navigation" aria-labelledby="pagination-heading">
                    <ul class="pager__items js-pager__items">
                        <li class="pager__item is-active">
                            <a href="?page=0" title="Текущая страница">
            <span class="visually-hidden">
              Текущая страница
            </span>1</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=1" title="Go to page 2">
            <span class="visually-hidden">
              Page
            </span>2</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=2" title="Go to page 3">
            <span class="visually-hidden">
              Page
            </span>3</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=3" title="Go to page 4">
            <span class="visually-hidden">
              Page
            </span>4</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=4" title="Go to page 5">
            <span class="visually-hidden">
              Page
            </span>5</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=5" title="Go to page 6">
            <span class="visually-hidden">
              Page
            </span>6</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=6" title="Go to page 7">
            <span class="visually-hidden">
              Page
            </span>7</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=7" title="Go to page 8">
            <span class="visually-hidden">
              Page
            </span>8</a>
                        </li>
                        <li class="pager__item">
                            <a href="?page=8" title="Go to page 9">
            <span class="visually-hidden">
              Page
            </span>9</a>
                        </li>
                        <li class="pager__item pager__item--ellipsis" role="presentation">…</li>
                        <li class="pager__item pager__item--next">
                            <a href="?page=1" title="На следующую страницу" rel="next">
                                <span class="visually-hidden">Следующая страница</span>
                                <span aria-hidden="true">Следующий ›</span>
                            </a>
                        </li>
                        <li class="pager__item pager__item--last">
                            <a href="?page=279" title="На последнюю страницу">
                                <span class="visually-hidden">Последняя страница</span>
                                <span aria-hidden="true">Последняя »</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>