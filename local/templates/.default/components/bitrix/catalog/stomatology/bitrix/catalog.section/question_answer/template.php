<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (count($arResult['ITEMS']) > 0) { ?>
    <div class="faq-blk content_norm">
        <div class="views-element-container">
            <div>
                <header>
                    <h2>Вопрос-ответ</h2>
                </header>
                    <?foreach($arResult["ITEMS"] as $arElement):?>
                    <div class="views-row">
                        <div class="views-field views-field-field-vopros-faq">
                            <div class="field-content">
                                <?=htmlspecialchars_decode($arElement["PREVIEW_TEXT"]);?>
                            </div>
                        </div>
                        <div class="views-field views-field-field-otvet-faq">
                            <div class="field-content">
                                <?=htmlspecialchars_decode($arElement["DETAIL_TEXT"]);?>
                            </div>
                        </div>
                    </div>
                    <?endforeach;?>
            </div>
        </div>
    </div>
<? } ?>