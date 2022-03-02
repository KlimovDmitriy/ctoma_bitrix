<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => "Выводит форму обратной связи",
    "DESCRIPTION" => "не кешируется",
    "ICON" => "/images/include.gif",
    "PATH" => array(
        "ID" => "rw_forms",
        "CHILD" => array(
            "ID" => "include_area",
            "NAME" => "Сервис",
        ),
    ),
);
?>