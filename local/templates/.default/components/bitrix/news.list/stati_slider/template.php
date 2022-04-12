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

<div class="swiper-container articleSwiper">
    <div class="swiper-wrapper">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="swiper-slide">
                <a href="<?if($arItem["PROPERTIES"]["URL"]["VALUE"]):?><?=$arItem["PROPERTIES"]["URL"]["VALUE"]?><?endif;?>">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>
