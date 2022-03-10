<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult["CATEGORIES"]) && $arResult["DEBUG"]["SHOW"] != 'Y') return;

IncludeTemplateLangFile(__FILE__);

$arParams["SHOW_PREVIEW_TEXT"] = ($arParams["SHOW_PREVIEW_TEXT"]) ? $arParams["SHOW_PREVIEW_TEXT"] : 'Y';

$preview = ($arParams["SHOW_PREVIEW"] != 'N');

$image_style = '';
$info_style = '';

if ($preview) {
    if ($arParams["PREVIEW_WIDTH_NEW"]) {
        $image_style .= 'width: ' . $arParams["PREVIEW_WIDTH_NEW"] . 'px;';
        $info_style .= 'padding-left: ' . ($arParams["PREVIEW_WIDTH_NEW"] + 5) . 'px;';
    }
    if ($arParams["PREVIEW_HEIGHT_NEW"]) {
        $image_style .= 'height: ' . $arParams["PREVIEW_HEIGHT_NEW"] . 'px;';
    }
    if ($info_style) $info_style = 'style="' . $info_style . '"';
}
?>

<div class="bx_smart_searche bx_searche <?= $arResult["VISUAL_PARAMS"]["THEME_CLASS"] ?>">


   <?
   unset($arResult['CATEGORIES']['all']);
   ?>

    <? if (!empty($arResult["CATEGORIES"])): ?>
        <? foreach ($arResult["CATEGORIES"] as $category_id => $arCategory): ?>

            <span class="search_r_block"><?= $arCategory['TITLE']; ?></span>


            <? foreach ($arCategory["ITEMS"] as $i => $arItem): ?>
                <a class="js_search_href bx_item_block_href" href="<? echo $arItem["URL"] ?>">

									<span class="bx_item_block_item_name">
										<span class="bx_item_block_item_name_flex_align">
											<? echo $arItem["NAME"] ?>
										</span>
									</span>
                </a>
            <? endforeach; ?>
        <? endforeach; ?>


    <? else: ?>
        <div class="bx_smart_no_result_find">
            <?= GetMessage("AG_SMARTIK_NO_RESULT"); ?>
        </div>
    <? endif; ?>
</div>