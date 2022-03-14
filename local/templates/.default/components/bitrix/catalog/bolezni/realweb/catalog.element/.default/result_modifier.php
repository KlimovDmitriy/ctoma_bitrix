<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

preg_match_all('~<h([1-2])>(.*?)</h([1-2])>~', $arResult['DETAIL_TEXT'], $matches);
$cnt_a = $cnt_h2 = 0;
$content = '';
for ($i = 0; $i < count($matches[0]); $i++) {
    if ($i <> 0 && $matches[1][$i] > $matches[1][$i - 1]) {
        $content .= '<ol>';
    } elseif ($i <> 0 && $matches[1][$i] < $matches[1][$i - 1]) {
        $cnt = $matches[1][$i - 1] - $matches[1][$i];
        for ($j = 1; $j <= $cnt; $j++)
            $content .= '</ol>';
    }
    $content .= '<li><a href="#a' . $cnt_a++ . '">' . preg_replace('~\d\.~', '', $matches[2][$i]) . '</a>' . "\n";
    $arResult['DETAIL_TEXT'] = str_replace($matches[0][$i], '<h' . $matches[1][$i] . ' id="a' . $cnt_h2++ . '">' . $matches[2][$i] . '</h' . $matches[1][$i] . '>', $arResult['DETAIL_TEXT']);
}
$arResult['content'] = $content;


$arResult['OTHERS'] = [];
foreach ($arResult['PROPERTIES']['OTHER_ILLNESSES']['VALUE'] as $other) {
    $res = CIBlockElement::GetByID($other);
    if ($ar_res = $res->GetNextElement()) {
        $arFields = $ar_res->GetFields();
    //    $arProps = $ar_res->GetProperties();

        $alt_name = $arFields['NAME'];
        /*
        if ($arProps['MENU_NAME']['VALUE'] != '') {


            $alt_name = $arProps['MENU_NAME']['VALUE'];
        }*/
        $url = $arFields['DETAIL_PAGE_URL'];

        $arResult['OTHERS'][] = ['NAME' => $alt_name, 'LINK' => $url];


    }

}

?>


