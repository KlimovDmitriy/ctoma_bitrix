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

<div class="questionPage__container">
    <div class="questionPage__content width width_norm width_paddingStandart">
        <div class="block-region-main">
                       <div class="questionPage">
                    <div class="questionPage__container">
                        <div class="questionPage__title">
                            <h1 class="questionPage__titleText title_norm width width_light width_paddingStandart">ВОПРОС-ОТВЕТ #<?=$arResult['DISPLAY_ID'];?></h1>
                        </div>
                    </div>
                </div>
                <div class="questionDefault__content width width_light">

                    <div class="questionDefault__question content_norm">
                        <label>Вопрос:</label>
                        <div><?=htmlspecialchars_decode($arResult['PREVIEW_TEXT']);?></div>

                        <div class="questionDefault__date">
                            <?=FormatDateFromDB($arResult["DATE_CREATE"], 'SHORT');?>
                        </div>
                    </div>

                    <div class="questionDefault__answer content_norm">
                        <label>Ответ:</label>
                        <div><?=htmlspecialchars_decode($arResult['DETAIL_TEXT']);?></div>

                    </div>
                </div>
            </div>







        </div>
    </div>
</div>
