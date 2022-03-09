<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

?><div class="searchBlock mt-3 mb-3 row">
<div class="theme-red col-lg-4 col-sm-12" id="title-search"> <?
	?><form action="" method="get" class="form_search"><div class="inner-form"> <?
		?><input type="hidden" name="tags" value="<?echo $arResult['REQUEST']['TAGS']?>" /><?
		?><div class="input-field first-wrap"> <input type="text" class="q bx-form-control" name="q" value="<?=$arResult['REQUEST']['QUERY']?>" size="40" /></div><?
      ?><div class="input-field second-wrap"><button class="btn-search" name="s" type="submit">Найти</button> </div><?
		?><input type="hidden" name="how" value="<?=$arResult['REQUEST']['HOW']=='d'? 'd': 'r'?>" /><?
	?></div></form><?
?></div></div><?

if($arResult['ERROR_CODE']!=0)
{
	ShowError($arResult['ERROR_TEXT']);
	?><p><?=GetMessage('SEARCH_CORRECT_AND_CONTINUE')?></p><br /><br /><?
} elseif(count($arResult['SEARCH'])>0)
{
	?><?

		////////////////// IBLOCKS
		if(!empty($arResult["EXT_SEARCH"]["IBLOCK"]["IBLOCKS"]))
		{
			foreach($arResult["EXT_SEARCH"]["IBLOCK"]["IBLOCKS"] as $iblock_id => $arIblock)
			{
				// catalog
				if(in_array($iblock_id,$arParams['IBLOCK_ID']))
				{
					global $arrSearchFilter;
					$arIds = array();
					foreach($arResult['EXT_SEARCH']['IBLOCK']['ITEMS'][$iblock_id] as $arItem)
					{
						if( $arItem['ITEM_ID']!=$arItem['ID'] && IntVal($arItem['ITEM_ID'])>0 )
						{
							$arIds[] = $arItem['ITEM_ID'];
						}
					}
					if( is_array($arIds) && count($arIds)>0 )
					{
						?><?
							$arrSearchFilter = array('ID'=>$arIds);
							$APPLICATION->IncludeComponent(
	"realweb:catalog.section",
	".default",
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => $iblock_id,
		// "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
		// "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
		"ELEMENT_SORT_FIELD" => "ID",
		"ELEMENT_SORT_ORDER" => $arIds,
		"PROPERTY_CODE" => array(
			0 => $arParams["PROPCODE_MORE_PHOTO"],
		),
		"META_KEYWORDS" => "",
		"META_DESCRIPTION" => "",
		"BROWSER_TITLE" => "-",
		"INCLUDE_SUBSECTIONS" => "Y",
		"BASKET_URL" => "",
		"ACTION_VARIABLE" => "",
		"PRODUCT_ID_VARIABLE" => "",
      "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
      "PRODUCT_DISPLAY_MODE" => "Y",
		"SECTION_ID_VARIABLE" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"FILTER_NAME" => "arrSearchFilter",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "0",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"DISPLAY_COMPARE" => "Y",
		"PAGE_ELEMENT_COUNT" => "48",
		"PAGE_RESULT_COUNT" => "96",
		"LINE_ELEMENT_COUNT" => "",
		"DEFAULT_SORT" => "rank",
		'PRICE_CODE' => array(0 => \Realweb\Site\User::getInstance()->getCurrentPriceCode(),),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "N",
		"PRICE_VAT_INCLUDE" => "Y",
		"USE_PRODUCT_QUANTITY" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "rempagination",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
		"OFFERS_FIELD_CODE" => $arParams["OFFERS_FIELD_CODE"],
		"OFFERS_PROPERTY_CODE" => $arParams["OFFERS_PROPERTY_CODE"],
		"OFFERS_SORT_FIELD" => "catalog_PRICE_".$arParams["SKU_PRICE_SORT_ID"],
		"OFFERS_SORT_ORDER" => "ASC",
		"OFFERS_LIMIT" => "0",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"BY_LINK" => "Y",
		"COMPONENT_TEMPLATE" => "gopro",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_ALL_WO_SECTION" => "N",
		"HIDE_NOT_AVAILABLE" => "L",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"VIEW" => "",
		"PROP_MORE_PHOTO" => "-",
		"PROP_ARTICLE" => "-",
		"PROP_ACCESSORIES" => "-",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"EMPTY_ITEMS_HIDE_FIL_SORT" => "Y",
		"DONT_SHOW_LINKS" => "N",
		"USE_AUTO_AJAXPAGES" => "N",
		"OFF_MEASURE_RATION" => "Y",
		"USE_STORE" => "Y",
		"LIST_SKU_VIEW" => "list",
		"COLUMNS5" => "N",
		"COL_XS_6" => "N",
		"STICKERS_PROPS" => array(
		),
		"STICKERS_DISCOUNT_VALUE" => "N",
		"OFF_HOVER_POPUP" => "N",
		"USE_LAZYLOAD" => "Y",
		"USE_RATING" => "Y",
		"USE_MIN_AMOUNT" => "Y",
		"MIN_AMOUNT" => "",
		"MAIN_TITLE" => "",
		"HIDE_IN_LIST" => "N",
		"PROP_STORE_REPLACE_SECTION" => "0",
		"RATING_PROP_COUNT" => "-",
		"RATING_PROP_SUM" => "-",
		"HIDE_AJAXPAGES_LINK" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
      'COL_CLASS' => 'col-md-6 col-xl-3 mb-4',
      'COMPARE_PATH' => '/catalog/compare',
      'COMPARE_NAME' => 'CATALOG_COMPARE_LIST',
      'USE_COMPARE_LIST' => 'Y',
	),
	false
);
						?><?
					}
				}
			}

		}

	?><?
	

}
else{
	ShowNote(GetMessage('SEARCH_NOTHING_TO_FOUND'));
};