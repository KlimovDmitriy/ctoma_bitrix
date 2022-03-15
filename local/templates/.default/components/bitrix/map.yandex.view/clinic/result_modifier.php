
<?php

use Realweb\Site\ArrayHelper;
use Realweb\Site\Site;
global $clinic;


$arResult['POSITION']['yandex_lat'] = str_replace(',','.',$clinic['LATITUDE']["VALUE"]);

$arResult['POSITION']['yandex_lon'] = str_replace(',','.',$clinic['LONGITUDE']["VALUE"]);

$arResult['POSITION']['yandex_scale']='12'; // масштаб карты








    $arResult['POSITION']['PLACEMARKS'][] = array(
        'LON' => str_replace(',','.',$clinic['LONGITUDE']["VALUE"]),
        'LAT' => str_replace(',','.',$clinic['LATITUDE']["VALUE"]),
        'TEXT' => $clinic['NAME'],
    );




?>