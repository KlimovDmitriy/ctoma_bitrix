<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;
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