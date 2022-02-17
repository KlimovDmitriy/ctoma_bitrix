<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
    <div class="klinikiView__row views-row">
        <div class="views-field views-field-field-foto">
            <div class="field-content">
                <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" hreflang="ru">
                    <img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arElement["PREVIEW_PICTURE"]["ALT"]?>">

                </a>
            </div>
        </div>
        <div class="views-field views-field-name">
            <span class="field-content">
                <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" hreflang="ru"><?=$arElement["NAME"]?></a>
            </span>
        </div>
        <div class="views-field views-field-field-adres">
            <div class="field-content">
                <?=$arElement['ADDRESS'];?>
            </div>
        </div>
        <div class="views-field views-field-field-rezim-raboty">
            <div class="field-content">
                <?=$arElement['SCHEDULE'];?>
            </div>
        </div><div class="views-field views-field-field-phones">
            <div class="field-content">
                <span class="call-phone-text <?=$arElement['CALLTOUCH'];?>">
                    <?
                        foreach ($arElement['PHONES'] as $number) {
                            echo $number.'<br>';
                        }
                    ?>
                </span>
            </div>
        </div>
    </div>
<?endforeach;?>
