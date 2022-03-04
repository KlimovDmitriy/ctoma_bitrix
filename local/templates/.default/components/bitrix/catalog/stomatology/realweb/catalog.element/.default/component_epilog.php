<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;

if (strlen($arResult['REDIRECT']) > 0) {
    LocalRedirect($arResult['REDIRECT'], false, "301 Moved permanently");
}

if ($arResult['PROPERTIES']['HIDE_H1']['VALUE'] == "Y") {
    $APPLICATION->SetPageProperty("HIDE_H1", "Y");
}


$replacer = function ($matches) use ($APPLICATION) {

    ob_start();

    $APPLICATION->IncludeComponent(
        "realweb:rw_forms", ".default",
        array(
            "CODE" => 'make-an-appointment',
            "COMPONENT_TEMPLATE" => ".default",
            "EDIT_TEMPLATE" => ""
        ),
    );

    return ob_get_clean();
};
echo preg_replace_callback(
    "[FORM]",
    $replacer,
    $arResult["CACHED_TPL"]
);
?>

