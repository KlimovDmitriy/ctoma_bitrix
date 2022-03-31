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
<div class="advantage__list">
<?php foreach ($arResult['ITEMS'] as $arItem) : ?>
<div class="advantage__card_wrapper">
    <div class="advantage__card">
      <div class="advantage__card_header">
        <div class="advantage__card_image"> <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"></div>
        <span class="advantage__card_title"><?= $arItem['NAME'] ?></span>
      </div>
      <hr>
      <div class="advantage__card_body">
        <?= $arItem['PREVIEW_TEXT'] ?>
      </div>
    </div>
</div>
<?php endforeach; ?>
</div>