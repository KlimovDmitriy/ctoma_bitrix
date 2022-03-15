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

<div class="width width_norm width_paddingStandart">
    <div class="node__content">
        <div class="forSert">
            <div>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <div>
                    <a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]; ?>" title="Сводные данные о результатах проведения СОУТ" data-fancybox="images" class="colorbox cboxElement">
                        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]; ?>" alt="" width="270" height="360">
                    </a>
                </div>
            <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
