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


<div class="klinika__title">
    <h1 class="service__titleText title_norm width width_norm width_paddingStandart"><div><?=$arResult['NAME']?></div></h1>
</div>

<div class="wrapPortfolioInfo">
    <div class="portfolioInfo">
        <div class="portDoctor"><span class="wrPortText">Врач: </span>
            <div><?=$arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["DISPLAY_VALUE"];?></div>
        </div>
    </div>
</div>


<div class="portContent">
    <div class="portfolioDescription">
        <div>
            <?=$arResult['DETAIL_TEXT']?>
        </div>
    </div>
    <div class="service__zapisatsa">
        <a href="/make-an-appointment" class="button_red">Записаться</a>
    </div>
</div>