<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
    <div class="viewServices__row views-row">
        <div class="uslugiPrevu portfolioPreview">
            <a class="uslugiPrevu__link" href="/portfolio/primer-200">
                <div class="portfolioImgFix">
                    <img src="/sites/default/files/2021-08/2_3.png" alt="Замена старой реставрации" width="648" height="418">
                </div>
                <div class="uslugiPrevu__nameWrap">
                    <span class="uslugiPrevu__name">Замена старой реставрации</span>
                </div>
                <div class="uslugiPrevu__nameWrapHover">
                    <span class="uslugiPrevu__nameHover">Замена старой реставрации</span>
                    <span class="uslugiPrevu__moreHover">Узнать</span>
                </div>
            </a>
        </div>
    </div>
<?endforeach;?>
