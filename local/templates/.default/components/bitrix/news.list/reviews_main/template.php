<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<div class="rev__home_block">
    <div id="reviewsHome" class="reviews width width_full"><div class="reviews__title title_homeWhite width width_norm width_paddingStandart">
            <span class="title__br"></span>
            <span class="title__text">Отзывы</span>
            <span class="title__br"></span>
        </div>

        <div class="reviews__content width width_paddingStandart">
            <div class="reviews__slider width width_full">
                <div class="reviews__swiper swiper-container swiper-container-horizontal swiper-container-fade">
                    <div class="swiper-wrapper">

            <? foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="swiper-slide">
                    <div class="otzyvDefault otzyvDefault_short width width_light">
                        <span class="otzyvDefault__podlojka"></span>
                        <div class="otzyvDefault__content">
                            <div class="otzyvDefault__top">
                                <? if (is_array($item['DOCTOR']) && !empty($item['DOCTOR'])) { ?>
                                    <div>
                                        <div class="otzyvDefault__vrach width_paddingStandart">
                                            <? $file = CFile::ResizeImageGet($item['DOCTOR']['PICTURE'], array('width' => 320, 'height' => 320), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                                            <div><a href="/personal/<?= $item['DOCTOR']['CODE'] ?>"><img
                                                            src="<?= $file['src'] ?>"
                                                            width="320" height="320"
                                                            alt="Отзыв о враче <?= $item['DOCTOR']['NAME'] ?>"
                                                            typeof="foaf:Image"></a></div>
                                            <div class="otzyvDefault__name">
                                                <a href="/personal/<?= $item['DOCTOR']['CODE'] ?>"><span><?= $item['DOCTOR']['NAME'] ?></span>
                                                </a>
                                            </div>
                                            <div class="otzyvDefault__dolznost">
                                                <div><?= $item['DOCTOR']['POSITION'] ?></div>
                                            </div>
                                            <div class="otzyvDefault__mestaRaboty">
                                                <label>Место работы:</label>
                                                <div>
                                                    <ul>
                                                        <? foreach ($item['DOCTOR']['WP'] as $key => $clinic) { ?>
                                                            <li><a href="/clinics/<?= $key ?>"
                                                                   hreflang="ru"><?= $clinic ?></a></li>
                                                        <? } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                                <div class="otzyvDefault__info width_paddingStandart">
                                    <div class="otzyvDefault__ot">
                                        <label>ОТ:</label> <span class="otzyvDefault__otName"><?= $item['NAME']; ?></span>
                                        <span class="otzyvDefault__otDate"><?= $item["DATE_ACTIVE_FROM"]
//                                            echo FormatDateFromDB($item["DATE_ACTIVE_FROM"], 'SHORT');
                                            ?></span>
                                    </div>
                                    <div class="otzyvDefault__body"><?= html_entity_decode($item['PREVIEW_TEXT']); ?></div>
                                </div>
                            </div>

                            <div class="otzyvButtonWrapper">
                                <div class="otzyvDefault__more"></div>
                                <div class="otzyvDefault__more">
                                    <a href="<?= $item['DETAIL_PAGE_URL']; ?>" class="button_red">Подробнее</a>
                                </div> <div class="otzyvDefault__more">
                                    <a href="/add_review/" class="button_red">Оставить отзыв</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
                    </div>
                    <div class="reviews__swiperButtonNext swiper-button-next swiper-button-white"></div>
                    <div class="reviews__swiperButtonPrev swiper-button-prev swiper-button-white"></div>
                </div>
            </div>
        </div>
    </div>
</div>