<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div class="articleDefault content_norm" itemscope="" itemtype="https://schema.org/Article">
    <meta itemprop="headline" content="<?=$arResult['NAME'];?>">
    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization" style="display: none">
        <meta itemprop="name" content="«СТОМА»">
        <meta itemprop="telephone" content="+78123210201">
        <meta itemprop="address" content="Санкт-Петербург">
        <span itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
      <img class="itemprops" itemprop="url image" src="/local/templates/main/images/logo.jpg" alt="Стоматология в СПб – зубные клиники «СТОМА»" title="«СТОМА» - Сеть стоматологических клиник Санкт-Петербурга" width="245" height="65">
    </span>
    </div>
    <meta itemprop="name" content="<?=$arResult['NAME'];?>">
    <meta itemprop="description" content="">
    <meta itemprop="author" content="<?=$arResult["DISPLAY_PROPERTIES"]["DOCTOR"]["LINK_ELEMENT_VALUE"]["NAME"];?>">
    <meta itemprop="datePublished" content="<?=FormatDateFromDB($arResult['DATE_CREATE'], 'Y-m-d');?>">
    <meta itemprop="dateModified" content="<?=FormatDateFromDB($arResult['TIMESTAMP_X'], 'Y-m-d');?>">

    <div class="articleDefault__top">
        <div class="articleDefault__img width_paddingStandart" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject" style="display:none">

            <meta itemprop="image" content="/themes/my_theme/bem/blocks/makeImg/img/zapis_img.jpg">
        </div>
        <div class="articleDefault__info width_paddingStandart" style="width:100%">
            <?=FormatDateFromDB($arResult['ACTIVE_FROM'], 'Y/m/d');?>
            <div class="timeto">Время прочтения - <span id="p1"><?=$arResult['READ_TIME'];?></span> минут.</div>
        </div>

    </div>
    <div class="articleDefault__info width_paddingStandart" style="width:100%">
        <div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.vote",
                "flat",
                Array(
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "ELEMENT_ID" => $arResult['ID'],
                    "MAX_VOTE" => "5",
                    "VOTE_NAMES" => array("1","2","3","4","5"),
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                ),
                $component
            );
            ?>
            <div>Рейтинг: <?=$arResult["PROPERTIES"]["rating"]["VALUE"];?> (Голосов: <?=$arResult["PROPERTIES"]["vote_count"]["VALUE"];?>)</div>
        </div>
    </div>
    <div class="articleDefault__body width_paddingStandart" itemprop="articleBody" id="main_text">
        <? if ($arResult['content'] != '') {?>
            <div class="ContentH2">Содержание</div>
                <ul>
                    <?=$arResult['content']?>
                </ul>
        <? } ?>

        <div><?=$arResult['DETAIL_TEXT']?></div>


        <script>(function() {
                if (window.pluso)if (typeof window.pluso.start == "function") return;
                if (window.ifpluso==undefined) { window.ifpluso = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                }})();
        </script>
        <div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="vkontakte,facebook,odnoklassniki"></div>



        <div id="toTop"><div class="toTop">Оглавление</div></div>
    </div>
</div>


