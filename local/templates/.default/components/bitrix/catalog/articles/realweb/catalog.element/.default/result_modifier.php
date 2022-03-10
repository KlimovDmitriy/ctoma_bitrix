
<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

preg_match_all('~<h([1-6])>(.*?)</h([1-3])>~', $arResult['DETAIL_TEXT'], $matches);
$cnt_a = $cnt_h2 = 0;
$content = '';
for ($i=0; $i < count($matches[0]); $i++) {
    if ($i <> 0 && $matches[1][$i] > $matches[1][$i-1]) {
        $content .= '<ol>';
    } elseif($i <> 0 && $matches[1][$i]<$matches[1][$i-1]) {
        $cnt = $matches[1][$i-1] - $matches[1][$i];
        for ($j = 1; $j <= $cnt; $j++)
            $content .= '</ol>';
    }
    $content .= '<li><a href="#a' . $cnt_a++ . '">' . preg_replace('~\d\.~', '', $matches[2][$i]) . '</a>' . "\n";
    $arResult['DETAIL_TEXT'] = str_replace($matches[0][$i], '<h' . $matches[1][$i] .' id="a' . $cnt_h2++ . '">' . $matches[2][$i] . '</h' . $matches[1][$i] . '>', $arResult['DETAIL_TEXT']);
}
$arResult['content'] = $content;


$cnt = mb_strlen(strip_tags($arResult["DETAIL_TEXT"]),'UTF-8');
$dt = round($cnt / 1500);
$arResult['READ_TIME'] = $dt;


if ($arResult["PROPERTIES"]["rating"]["VALUE"] <= 3.65) {
    $arResult["PROPERTIES"]["rating"]["VALUE"] = 3.65;

}
if ($arResult["PROPERTIES"]["vote_count"]["VALUE"] == 0) {
    $arResult["PROPERTIES"]["vote_count"]["VALUE"] = 1;
}


?>


