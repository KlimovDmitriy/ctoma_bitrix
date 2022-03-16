<?php
// Русский алфавит
$ru = array(
    'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М',
    'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ',
    'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
);
$res_new = [];


$SELECT_IBLOCK_ID = \Realweb\Site\Site::getIblockId('stomatology');
$code = ['lechenie-periodontita', 'lechenie-pulpita'];
$select_elements = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => $SELECT_IBLOCK_ID, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "!PROPERTY_MENU_NAME" => false]);


$arResult['ITEMS'] = array_merge($select_elements, $arResult['ITEMS']);

foreach ($ru as $letter) {
    $tar = [];
    foreach ($arResult['ITEMS'] as $item) {

        $ename = $item['NAME'];

        $alt_name = $item['PROPERTIES']['MENU_NAME']['VALUE'];

        if (isset($item['PROPERTIES']['MENU_NAME']['VALUE']) && $alt_name != '') {
            $ename = $alt_name;
        }


        //Первая буква
        $x = mb_substr($ename, 0, 1, 'UTF-8');

        if ($x == $letter) {
            $tar[] = $item;

        }


    }

    if (!empty($tar)) {

        $res_new[$letter] = $tar;
    }


}

$arResult['LETTERS'] = $res_new;


?>