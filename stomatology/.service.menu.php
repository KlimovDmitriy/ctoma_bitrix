
<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinks=$APPLICATION->IncludeComponent(
    "realweb:menu.sections",
    "",
    array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => \Realweb\Site\Site::getIblockId('stomatology'),
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000"
    ),
    false
);


?>

