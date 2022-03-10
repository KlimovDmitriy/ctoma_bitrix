<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="views-element-container">
    <h2 class="portfolioBlock__title">
        <span class="title__br"></span>
        <span class="title__text">Другие работы</span>
        <span class="title__br"></span>
    </h2>
    <div class="uslugi_all width width_full width_paddingStandart">
        <div class="uslugi__content width width width_norm width_paddingStandart">
            <div class="views-element-container">
                <div class="viewServices portfolioBlocks">
                    <?foreach($arResult["ITEMS"] as $arElement):?>
                    <div class="views-row">
                        <div class="uslugiPrevu portfolioPreview">
                            <a class="uslugiPrevu__link" href="/portfolio/<?=$arElement["CODE"]?>/">
                                <div class="portfolioImgFix"> <img src="<?=$arElement['PHOTO_AFTER'];?>" alt=""></div>
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
                </div>
            </div>
        </div>
    </div>
</div>