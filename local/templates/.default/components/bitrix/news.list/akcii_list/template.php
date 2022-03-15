<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
<div id="actionsClinik" class="actions actions_clinik width width_full fullCommonWrap">
    <h2 class="actions__title title_home width width_norm width_paddingStandart"><span class="title__br"></span><span
                class="title__text">Акции</span><span class="title__br"></span></h2>
<div class="act__CommonBlock">

    <?
    foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="act__Flex">
        <div class="actions__img">
            <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]; ?>" width="212"
                     height="300">
            </a>
        </div>
        <div class="actions__info">
            <span class="actions__infoTitle">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" hreflang="ru"><?= $arItem["NAME"]; ?></a>
            </span>
            <span class="actions__srok">
                <label>Срок действия акции:</label> <span><?= FormatDateFromDB(
                      $arItem['ACTIVE_TO'],
                      'd-m-Y'
                    ); ?></span>
            </span>
            <span class="actions__srokText">
                <noindex>
                      <span>
                        <?= htmlspecialcharsBack($arItem["PROPERTIES"]["TIME_TO"]["VALUE"]["TEXT"]) ?>
                      </span>
                    </noindex>
            </span>
            <span class="actions__short"></span>
            <span class="actions__actions">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="actions__more">Подробности</a>
                    <a data-form="akciya" data-act_name="<?= $arItem["NAME"]; ?>"
                       class="modaler_action actions__zapis use-ajax">Записаться</a>
            </span>
        </div>
    </div>

    <?
    endforeach; ?>
</div>
</div>