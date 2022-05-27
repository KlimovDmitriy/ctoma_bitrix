<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (count($arResult['ITEMS']) > 0) { ?>
    <div class="faq-blk content_norm" itemscope itemtype="https://schema.org/FAQPage">
        <div class="views-element-container">
            <div>
                <header>
                    <h2>Вопрос-ответ</h2>
                </header>
                    <?foreach($arResult["ITEMS"] as $arElement):?>
                    <div class="views-row" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="views-field views-field-field-vopros-faq">
                            <div class="field-content">
                                <div itemprop="name"><?=htmlspecialchars_decode($arElement["PREVIEW_TEXT"]);?></div>
                            </div>
                        </div>
                        <div class="views-field views-field-field-otvet-faq">
                            <div class="field-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text"><?=htmlspecialchars_decode($arElement["DETAIL_TEXT"]);?></div>
                            </div>
                        </div>
                    </div>
                    <?endforeach;?>
            </div>
        </div>
    </div>
<? } ?>