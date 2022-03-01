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
<div class="doctorsFilter__right text" id="all-flavors">
<div class="doctorsFilter__selectDoctor">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<!--<pre>-->
<!--    --><?// print_r($arResult['ITEMS'])[0]?>
<!--</pre>-->
<div class="views-row flavor" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="doctorsFilter__doctor">
    <div class="doctorsFilter__photo">
        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" />
    </div>
        <div class="doctorsFilter__info">
        <span class="doctorsFilter__title">
            <a href="<?= $arItem['DETAIL_PAGE_URL']?>" hreflang="ru"><?= $arItem['NAME']?></a>
        </span>
            <span class="doctorsFilter__position">Стоматолог-терапевт</span>

            <span class="doctorsFilter__work"><label>Места работы:</label>
           <ul><li><a href="/clinics/klinika-na-lenina" hreflang="ru">Клиника на Ленина (м. Петроградская)</a></li></ul>
        </span>

            <span class="doctorsFilter__work"><label>Стаж работы с:</label>
           <span class="minLabel">2018 года</span>
        </span>

            <span class="doctorsFilter__work"><label>Отзывов:</label>
           <span class="minLabel">2</span>
        </span>


            <div class="doctorsFilter__action">
                <a href="/form/zapisatsa-k-vracu?doctor_nid=11481" class="use-ajax button_red" data-dialog-options='{
            "width":"500px",
                "minHeight":"800px",
                "dialogClass":"popupDialog"
                }' data-dialog-type="modal">Записаться</a>
            </div>

        </div>
    <br>
    <br>
    </div>
</div>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div></div>