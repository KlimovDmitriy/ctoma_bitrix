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
<!--<pre>-->
<?// print_r($arResult['ITEMS']);?>
<!--</pre>-->
<?php if(count($arResult['ITEMS'])>0):?>
<div class="articlesSlide width width_full">
    <div class="articlesSlide__container width width_norm width_paddingStandart">
        <h2 class="articlesSlide__akciiTitle title_homeRed width width_norm">
            <span class="title__br"></span><span class="title__text">Статьи врача</span><span class="title__br"></span>
        </h2>
        <div class="articlesSlide__slider swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($arResult['ITEMS'] as $arItem):?>
                <div class="swiper-slide">
                    <div class="articleTeaser content_norm">
                        <div class="articleTeaser__info width_paddingStandart">
                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="articleTeaser__title"><?= $arItem['NAME'] ?></a>
                            <?= $arItem['ACTIVE_FROM'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="articlesSlide__ButtonNext swiper-button-next swiper-button-white"></div>
            <div class="articlesSlide__ButtonPrev swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</div>
<?php endif; ?>