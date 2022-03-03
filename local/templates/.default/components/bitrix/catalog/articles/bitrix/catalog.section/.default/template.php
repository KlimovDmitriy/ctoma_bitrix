<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?foreach($arResult["ITEMS"] as $arElement):?>

    <div class="articlesView__row views-row">
        <div class="articleTeaser content_norm">
            <div class="articleTeaser__img width_paddingStandart">

            </div>
            <div class="articleTeaser__info width_paddingStandart">
                <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="articleTeaser__title"><span><?=$arElement["NAME"]?></span>
                </a>
                <?=$arElement['DATE_CREATE'];?>
            </div>
        </div>
    </div>

<?endforeach;?>
<?= $arResult['NAV_STRING'] ?>