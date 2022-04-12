<?php

namespace Realweb\Site;

class Handlers
{

    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        //Автоматическая генерация символьного кода для элемента портфолио
        if ($arFields['IBLOCK_ID'] == Site::getIblockId('portfolio') && isset($arFields['ID'])) {

            \Bitrix\Main\Loader::IncludeModule('iblock');
            $el = new \CIBlockElement;

            $gen_code = 'primer-' . $arFields['ID'];

            $arLoadProductArray = array(
                "CODE" => $gen_code
            );
            $res = $el->Update($arFields['ID'], $arLoadProductArray);
        }
    }

}