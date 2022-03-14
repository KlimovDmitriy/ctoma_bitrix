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


$page = 1;
if ($_REQUEST['PAGEN_1'] > 0) {
    $page = $_REQUEST['PAGEN_1'];
}
?>
<div class="bolezni__container ">
    <div class="bolezni__title">
        <h1 class="bolezni__titleText title_norm width width_norm width_paddingStandart">Болезни</h1>
    </div>
    <div class="bolezni__center width width_norm width_paddingStandart">
        <div class="bolezni__content">
            <ul class="bolezni__nav">

                <li data-show-all="" class="bolezni__navItem bolezni__navItem--all"><a href="#">Все</a></li>


                <?foreach ($arResult['LETTERS'] as $key=>$letter){?>
                <li data-letter="<?=$key?>" class="bolezni__navItem"><a href="#"><?=$key?></a></li>
                <?}?>

            </ul>
            <ul class="bolezni__group">
                <?foreach ($arResult['LETTERS'] as $key=>$letter){?>
                <li data-show="<?=$key;?>" class="bolezni__groupItem" >
                    <div class="bolezni__groupTitle title_norm width width_norm width_paddingStandart"><?=$key;?></div>
                    <ul class="bolezni__list">
                        <?foreach ($letter as $bolezn){?>
                        <li class="bolezni__listItem"><a href="<?=$bolezn['DETAIL_PAGE_URL'];?>"><?=$bolezn['PROPERTIES']['MENU_NAME']['VALUE'];?></a></li>
                        <?}?>
                    </ul>
                </li>
                <?}?>

            </ul>
        </div>

        <div class="bolezni__bottomMobile">
        </div>
    </div>
</div>
