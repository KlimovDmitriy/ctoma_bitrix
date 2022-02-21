
<?php

use Realweb\Site\ArrayHelper;
use Realweb\Site\Site;



$arResult['POSITION']['yandex_lat'] = '59.94421707628917';

$arResult['POSITION']['yandex_lon'] = '30.338121544921886';

$arResult['POSITION']['yandex_scale']='10'; // масштаб карты





$cls = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('clinics'), 'PROPERTY_SHOW_MENU_VALUE' => "да"]);
foreach ($cls as $clinic){


    $arResult['POSITION']['PLACEMARKS'][] = array(
        'LON' => str_replace(',','.',$clinic['PROPERTIES']['LONGITUDE']["VALUE"]),
        'LAT' => str_replace(',','.',$clinic['PROPERTIES']['LATITUDE']["VALUE"]),
        'TEXT' => $clinic['NAME'],
    );


}

?>