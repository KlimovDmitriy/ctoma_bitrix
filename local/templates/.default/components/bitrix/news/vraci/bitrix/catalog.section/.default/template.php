<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?php
if ($arResult['ITEMS']): ?>
    <div class="doctorWorks">
        <div class="views-element-container">
            <h2 class="title_homeRed width width_norm width_paddingStandart"><span class="title__br"></span><span
                        class="title__text">Примеры работ</span><span class="title__br"></span></h2>
            <div class="uslugi_all width width_full width_paddingStandart">
                <div class="uslugi__content width width width_norm width_paddingStandart">
                    <div class="views-element-container">
                        <div class="viewServices">
                            <?
                            foreach ($arResult["ITEMS"] as $arElement): ?>
                                <div class="views-row">
                                    <div class="uslugiPrevu portfolioPreview">
                                        <a class="uslugiPrevu__link" href="<?= $arElement["DETAIL_PAGE_URL"] ?>">
                                            <div class="portfolioImgFix">
                                                <img src="<?= $arElement['PHOTO_AFTER']; ?>"
                                                     alt="<?= $arElement["NAME"] ?>" width="648"
                                                     height="418">
                                            </div>
                                            <div class="uslugiPrevu__nameWrap">
                                                <span class="uslugiPrevu__name"><?= $arElement["NAME"] ?></span>
                                            </div>
                                            <div class="uslugiPrevu__nameWrapHover">
                                                <span class="uslugiPrevu__nameHover"><?= $arElement["NAME"] ?></span>
                                                <span class="uslugiPrevu__moreHover">Узнать</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif; ?>