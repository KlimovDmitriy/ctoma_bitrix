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
<div class="newsPage__container">
    <div class="newsPage__title">
        <h1 class="newsPage__titleText title_norm width width_norm width_paddingStandart"><?= $arResult['NAME'] ?></h1>
    </div>
    <div class="newsPage__content width width_norm">
    <div class="block-region-main">
        <div class="block">
            <div class="newsPageDefault">
                <div class="newsPageDefault__img width_paddingStandart">
                    <div>
                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC']?>" typeof="foaf:Image">
                    </div>
                </div>
                <div class="newsPageDefault__info content_norm width_paddingStandart">
                    <div>
                        <?= $arResult['~DETAIL_TEXT'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>