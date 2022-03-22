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

<h1 class="otzyv__title title_grey width width_norm width_paddingStandart">
    <span class="title__br t1"></span>
        <span class="title__text" style="font-size:24px;">Отзыв о клинике «Стома» от <?=$arResult['ACTIVE_FROM'];?>
            <span class="title__br"></span>
        </span>
    <span class="title__br t1"></span>
</h1>
<div class="otzyvy__actions width width_light width_paddingLeftRight rev__Right">
    <a class="button_red" href="/add_review/">Оставить отзыв</a>
</div>
<div class="otzyv__content width width_norm width_paddingStandart">
    <div class="otzyvDefault width width_light">
        <span class="otzyvDefault__podlojka"></span>
        <div class="otzyvDefault__content">
            <div class="otzyvDefault__top">
                <!-- doctor block begin -->
                <? if($arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["VALUE"]){ ?>
                <div>
                    <div class="otzyvDefault__vrach width_paddingStandart">
                        <div>
                            <a href="<?=$arResult["DOCTOR_INFO"]["DETAIL_PAGE_URL"];?>">
                                <img src="<?=$arResult['DOCTOR_DETAIL_PICTURE'];?>" alt="Отзыв о враче <?=$arResult["DOCTOR_INFO"]["NAME"];?>" width="320" height="320">
                            </a>
                        </div>
                        <div class="otzyvDefault__name">
                            <span><a href="<?=$arResult["DOCTOR_INFO"]["DETAIL_PAGE_URL"];?>"><?=$arResult["DOCTOR_INFO"]["NAME"];?></a></span>
                        </div>
                        <div class="otzyvDefault__dolznost">
                            <div><?=$arResult['DOCTOR_POSITION'];?></div>
                        </div>

                        <div class="otzyvDefault__mestaRaboty">
                            <label>Место работы:</label>
                            <?foreach($arResult['DOCTOR_CLINICS'] as $arElement):?>
                                <div>
                                    <ul>
                                        <li><?=$arElement;?></li>
                                    </ul>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div><!-- doctor block end -->
                <? } ?>
                <div class="otzyvDefault__info width_paddingStandart">
                    <div class="otzyvDefault__ot">
                        <label>ОТ:</label>
                        <span class="otzyvDefault__otName"><?=$arResult['NAME'];?></span>
                        <span class="otzyvDefault__otDate"><?=$arResult['ACTIVE_FROM'];?></span>
                    </div>
                    <div class="otzyvDefault__body">
                        <div>
                            <p><?=$arResult["~PREVIEW_TEXT"];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

