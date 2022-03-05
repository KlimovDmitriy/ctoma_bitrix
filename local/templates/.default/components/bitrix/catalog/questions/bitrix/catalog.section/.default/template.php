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


$page=1;
if ($_REQUEST['PAGEN_1']>0){
    $page=$_REQUEST['PAGEN_1'];
}
?>
<div class="otzyvy__container">
    <h1 class="otzyvy__title title_grey width width_norm width_paddingStandart">
        <span class="title__br"></span><span class="title__text">Вопрос-ответ. Страница <?=$page;?> </span><span class="title__br"></span>
    </h1>
    <div class="faq_link">
        <a href="/faq/" class="button_red">Ответы на часто задаваемые вопросы</a>
    </div>
    <div class="otzyvy__content width width_norm width_paddingStandart">
        <div class="views-element-container">
            <div>
                <? foreach ($arResult['ITEMS'] as $item) { ?>

                    <div class="views-row">
                        <div class="otzyvDefault width width_light">
                            <span class="otzyvDefault__podlojka"></span>
                            <div class="questionTeaser__content ">

                                <div class="otzyvDefault__top">


                                    <div class="otzyvDefault__info width_paddingStandart">

                                        <div class="otzyvDefault__body">
                                            Вопрос:
                                            <div>
                                                <?= html_entity_decode($item['PREVIEW_TEXT']); ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="questionTeaser__more"><a class="button_red"
                                                                   href="<?= $item['DETAIL_PAGE_URL']; ?>/">Посмотреть ответ</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <? } ?>
                <?= $arResult['NAV_STRING'] ?>
            </div>
        </div>
    </div>
</div>