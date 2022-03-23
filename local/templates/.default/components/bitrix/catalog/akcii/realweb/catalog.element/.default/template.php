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

<div class="akcia__title">
    <h1 class="akcia__titleText title_norm width width_norm width_paddingStandart"><?=$arResult['NAME']?></h1>
</div>
<div class="akcia__mainContent width">
<div class="akcia__content width width_norm width_paddingStandart">
    <div class="block-region-main">
        <div class="block">
            <article class="akciaFull">
                <div class="akciaFull__img">
                    <div>
                        <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="">
                    </div>
                </div>
                <div class="akciaFull__info">
                    <div class="akciaFull__srokText content_norm">
                        <div><?=$arResult["PROPERTIES"]["TIME_TO"]["~VALUE"]["TEXT"];?></div>
                    </div>
                    <div class="akciaFull__anons content_norm"><?=$arResult['~DETAIL_TEXT']?></div>

                    <div class="akciaFull__kliniks">
                        <label>Стоматологии:</label>
                        <div>
                            <?foreach($arResult["PROPERTIES"]["CLINICS"]["VALUE"] as $item_clinic):?>
                                <?$res = CIBlockElement::GetByID($item_clinic);?>
                                <?if($ar_res = $res->GetNext())?>
                                    <div><a href="/clinics/<?=$ar_res["CODE"];?>/"><?=$ar_res["NAME"];?></a></div>
                            <?endforeach;?>
                        </div>
                    </div>
                    <div class="akciaFull__zapisatsa">
                        <a href="/make-an-appointment/" class="button_red">Записаться</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
</div>