<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if ($arResult['PROPERTIES']['OLD_ID']['VALUE']) {

    $arResult['DISPLAY_ID'] = $arResult['PROPERTIES']['OLD_ID']['VALUE'];
} else {
    $arResult['DISPLAY_ID'] = $arResult['ID'];
}


?>
