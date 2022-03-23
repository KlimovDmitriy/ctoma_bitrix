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

<div class="articlesPage__container ">

    <div class="articlesPage__title">
        <h1 class="articlesPage__titleText title_norm width width_norm width_paddingStandart">
            <span><?= $name; ?></span>
        </h1>
    </div>

    <div class="articlesPage__center width width_norm">


        <div class="articlesPage__leftSidebar width_paddingStandart">

            <?php \Realweb\Site\Site::showIncludeText('LEFT_BANNER_STATIC'); ?>
            <? if (!empty($arResult['OTHERS'])) { ?>

                <p class="articlesHeaderH3">Другие болезни</p>

                <div class="menuNormPage rekArticle">

                    <div>

                        <? foreach ($arResult['OTHERS'] as $other) {

                            ?>
                            <div><a href="<?= $other['LINK']; ?>" hreflang="ru"><?= $other['NAME']; ?></a></div>
                        <? } ?>

                    </div>

                </div>


                <p class="articlesHeaderH3"><a href="/bolezni/">Смотреть все</a></p>

            <? } ?>

        </div>
        <div class="articlesPage__content articleDefault__body width_paddingStandart">
            <div class="articleDefault__body width_paddingStandart" itemprop="articleBody" id="main_text">
                <? if ($arResult['content'] != '') { ?>
                    <div class="ContentH2">Содержание</div>
                    <ul>
                        <?= $arResult['content'] ?>
                    </ul>
                <? } ?>

                <div><?= $arResult['DETAIL_TEXT'] ?></div>


                <div id="toTop">
                    <div class="toTop">Оглавление</div>
                </div>
            </div>
        </div>

    </div>

</div>


