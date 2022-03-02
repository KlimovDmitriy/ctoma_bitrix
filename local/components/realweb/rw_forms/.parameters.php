<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */
use Bitrix\Main\Loader;
use Bitrix\Iblock;
if (!Loader::includeModule('iblock'))
    return;
$arComponentParameters = array(
    "GROUPS" => array(
        "PARAMS" => array(
            "NAME" => GetMessage("MAIN_INCLUDE_PARAMS"),
        ),
    ),

    "PARAMETERS" => array(
    ),
);


$arComponentParameters["PARAMETERS"]["CODE"] = array(
    "NAME" => GetMessage("MAIN_INCLUDE_CODE"),
    "TYPE" => "STRING",
    "DEFAULT" => "",
    "PARENT" => "PARAMS",
);


?>