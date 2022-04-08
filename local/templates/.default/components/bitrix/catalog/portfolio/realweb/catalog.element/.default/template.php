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


<div class="klinika__title width_paddingStandart">
    <h1 class="service__titleText title_norm width width_norm width_paddingStandart"><div><?=$arResult['NAME']?></div></h1>
</div>

<div class="wrapPortfolioInfo">
    <div class="twentytwentyBlock">
        <div class="twentytwenty-wrapper">
            <div class="twentytwenty-container">
                <?$img_before = CFile::GetPath($arResult["PROPERTIES"]["PHOTO_BEFORE"]["VALUE"]);?>
                <img alt="" class="twentytwenty-before lazyloaded"  src="<?=$img_before;?>">
                <?$img_after = CFile::GetPath($arResult["PROPERTIES"]["PHOTO_AFTER"]["VALUE"]);?>
                <img alt="" class="twentytwenty-after lazyloaded"  src="<?=$img_after;?>">
            </div>
        </div>
    </div>
    <div class="portfolioInfo">
        <div class="portDoctor"><span class="wrPortText">Врач: </span>
            <div><?=$arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["DISPLAY_VALUE"];?></div>
        </div>
        <div class="portDoctor"><span class="wrPortText">Клиники приема: </span>
            <?foreach($arResult["PROPERTIES"]["CLINICS"]["VALUE"] as $item_clinic):?>
                <?$res = CIBlockElement::GetByID($item_clinic);?>
                <?if($ar_res = $res->GetNext())?>
                    <div><a href="/clinics/<?=$ar_res["CODE"];?>/"><?=$ar_res["NAME"];?></a></div>
            <?endforeach;?>
        </div>
    </div>
</div>


<div class="portContent">
    <div class="portfolioDescription">
        <div>
            <?=$arResult['~DETAIL_TEXT']?>
        </div>
    </div>
    <div class="service__zapisatsa">
        <a href="/make-an-appointment/" class="button_red">Записаться</a>
    </div>
</div>