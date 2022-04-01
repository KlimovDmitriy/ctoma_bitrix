<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="faqView">


    <div class="faq_content width width_norm ">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="views-row">
            <div class="questionTeaser">
                <div class="questionTeaser__content width width_light">
                    <div class="views-field views-field-field-vopros-faq" data-id="<?=$arItem["ID"]?>">
                        <div class="field-content">
                                <?=htmL_entity_decode($arItem['PREVIEW_TEXT']);?>

                        </div>
                    </div>
                    <div class="views-field views-field-field-otvet-faq otvet-<?=$arItem["ID"]?>">
                        <div class="field-content"><?=htmL_entity_decode($arItem['DETAIL_TEXT']);?>
                        </div>
                    </div>
                    <div class="views-field views-field-field-service">
                        <div class="field-content">Установка брекет систем</div>
                    </div>
                    <div class="views-field views-field-created"><span class="field-content"><?=FormatDateFromDB($arItem["DATE_ACTIVE_FROM"], 'SHORT');?></span></div>
                    <div class="views-field views-field-title"><span class="field-content"><?=$arItem['NAME'];?></span>
                    </div>
                </div>
            </div>
        </div>
        <? endforeach; ?>
        <div class="ask__bottom">
            <a href="/voprosy-i-otvety" class="button_red">Смотреть остальные вопросы</a>
        </div>
    </div>


</div>

