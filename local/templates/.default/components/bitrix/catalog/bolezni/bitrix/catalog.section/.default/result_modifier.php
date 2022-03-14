<?php
// Русский алфавит
$ru = array(
    'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М',
    'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ',
    'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
);
$res_new = [];
foreach ($ru as $letter) {
    $tar = [];
    foreach ($arResult['ITEMS'] as $item) {

        $ename = $item['NAME'];

        $alt_name = $item['PROPERTIES']['MENU_NAME']['VALUE'];

        if ($alt_name != '') {
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