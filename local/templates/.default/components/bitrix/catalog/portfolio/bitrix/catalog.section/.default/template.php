<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?foreach($arResult["ITEMS"] as $arElement):?>
    <div class="viewServices__row views-row">
        <div class="uslugiPrevu portfolioPreview">
            <a class="uslugiPrevu__link" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
                <div class="portfolioImgFix">
                    <img src="<?=$arElement['PHOTO_AFTER'];?>" alt="<?=$arElement["NAME"]?>" width="648" height="418">
                </div>
                <div class="uslugiPrevu__nameWrap">
                    <span class="uslugiPrevu__name"><?=$arElement["NAME"]?></span>
                </div>
                <div class="uslugiPrevu__nameWrapHover">
                    <span class="uslugiPrevu__nameHover"><?=$arElement["NAME"]?></span>
                    <span class="uslugiPrevu__moreHover">Узнать</span>
                </div>
            </a>
        </div>
    </div>

<?endforeach;?>
<?= $arResult['NAV_STRING'] ?>