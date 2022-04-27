<?php

use Realweb\Site\ArrayHelper;
use Realweb\Site\Site;

$current = Site::getInstance()->getClinic();


if (!($current) || empty($current)) {
    $arResult['currentID'] = 335;
}
if (is_array($current)) {

    $arResult['currentID'] = $current['ID'];
}


$cls = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => \Realweb\Site\Site::getIblockId('clinics'), 'ACTIVE' => "Y"]);

foreach ($cls as $c) {

    $arResult['clinics'][$c['ID']] = $c;
}
$arResult['current'] = $arResult['clinics'][$arResult['currentID']];

?>