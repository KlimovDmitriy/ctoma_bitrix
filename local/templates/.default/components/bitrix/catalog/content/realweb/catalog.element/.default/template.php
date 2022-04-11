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
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];

?>
<?php if ($arResult['CODE'] == 'price'): ?>
    <div class="praise__title">
        <h1 class="praise__titleText title_norm width width_norm width_paddingStandart"><?= $name; ?></h1>
    </div>
<?php else: ?>
<h1 class="normPage__title title_grey width width_norm width_paddingStandart">
    <span class="title__br"></span><span class="title__text">
        <?= $name; ?>
    </span><span class="title__br"></span>
</h1>
<?php endif; ?>
<div class="normPage__container ">
    <div class="normPage__center width width_norm width_paddingStandart">
        <div class="normPage__leftSidebar">

            <div class="menuNormPage">
                <?
                $elements = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('content'), 'PROPERTY_SHOW_MENU_VALUE' => "да"]);
                ?>

                <ul class="menuNormPage__list">

                    <li class="menuNormPage__element">
                        <a class="menuNormPage__linck <? if ($_SERVER['REQUEST_URI']=='/sitemap/') {
                            ?>is-active<? }else{ ?>" href="/sitemap/"<? } ?>"
                        >Карта сайта</a></li>
                    <?
                    foreach ($elements as $el) {

                        ?>

                        <li class="menuNormPage__element">
                            <a
                                    class="menuNormPage__linck <? if ($el['CODE'] == $arResult['CODE']) {
                                        ?>is-active<? }else{ ?>" href="/<?= $el['CODE'] ?>/"<? } ?>"
                            ><?= $el['NAME'] ?></a>
                        </li>
                    <? } ?>

                </ul>


            </div>

            <?php \Realweb\Site\Site::showIncludeText('LEFT_BANNER_STATIC'); ?>

        </div>
        <div class="normPage__content">
            <div class="block-region-main">
                <div class="block">


                    <div class="normPageDefault content_norm">
                        <?php echo $arResult['PREVIEW_TEXT']; ?>
                        <?php
                        foreach ($arResult['COMPONENTS'] as $PAGE_TYPE): ?>
                            <?php if ($PAGE_TYPE['TYPE'] == 'COMPONENT'): ?>
                                <?

                                $APPLICATION->IncludeComponent(
                                    $PAGE_TYPE['COMPONENT_NAME'], $PAGE_TYPE['TEMPLATE'], \Realweb\Site\Property\PageType::ProcessParams($PAGE_TYPE['arParams']), false, array('HIDE_ICONS' => 'Y')
                                );
                                ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php echo $arResult['DETAIL_TEXT']; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

