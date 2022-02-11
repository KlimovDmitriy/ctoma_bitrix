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
<? //if ($arResult['PROPERTIES']['IS_CONTAINER']['VALUE'] == 'Y'): ?>
    <div class="width width_norm width_paddingStandart">
        <div class="content_norm">
            <?php echo $arResult['DETAIL_TEXT']; ?>
        </div>
    </div>
<? //else: ?>
    <?php// echo $arResult['DETAIL_TEXT']; ?>
<?// endif; ?>