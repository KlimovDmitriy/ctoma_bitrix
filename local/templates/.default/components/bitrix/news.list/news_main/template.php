<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
<div id="newsHome" class="news width width_full">
    <h2 class="news__title title_homeRed width width_norm width_paddingStandart">
        <span class="title__br"></span><span class="title__text">Новости</span><span class="title__br"></span>
    </h2>
    <div class="news__content width width_light">
        <div class="news__left width_paddingStandart">
            <?php foreach ($arResult['ITEMS'] as $key=>$item):?>
            <div class="news__elem <?= $key==0 ? 'active' : ''?>">
                <div class="news__wrap">
                    <span class="news__mTitle"><?=$item['NAME']?></span>
                    <span class="news__mCreated"><?=$item['ACTIVE_FROM']?></span>
                </div>
            </div>
            <?php endforeach;?>
            <div class="news__all">
                <a href="/news" class="button_red">Все новости</a>
            </div>
        </div>
        <div class="news__right width_paddingStandart">
            <div class="news__activElem">
                <div class="news__wrap">
                    <div class="news__created"><?= $arResult['FIRST_ITEM']['ACTIVE_FROM']?></div>
                    <div class="news__titl"><?= $arResult['FIRST_ITEM']['NAME']?></div>
                    <div class="news__body content_norm">
                        <?= $arResult['FIRST_ITEM']['~DETAIL_TEXT'] ?>
                    </div>
                </div>
                <div class="news__more">
                    <a href="<?= $arResult['FIRST_ITEM']['DETAIL_PAGE_URL']?>" class="button_red">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>