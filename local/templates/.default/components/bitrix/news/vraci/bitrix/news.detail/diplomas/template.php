<?php if (count($arResult['DIPLOMAS']) > 0):?>
<div class="diplomas width width_full">

    <div class="diplomas__container width width_norm width_paddingStandart">
        <h2 class="diplomas__title">Дипломы</h2>

        <div class="diplomas__slider swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($arResult['DIPLOMAS'] as $diploma):?>
                <div class="swiper-slide">
                    <div class="field-content">
                        <a href="<?= $diploma['LARGE']['src'] ?>" title="<?= $arResult['NAME'] ?>" data-colorbox-gallery="gallery-doctor-921-DS56A2--JJs" class="colorbox cboxElement">
                            <img src="<?= $diploma['PREVIEW']['src'] ?>" width="175" height="285" alt="" typeof="foaf:Image">

                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>

            <div class="diplomas__ButtonNext swiper-button-next swiper-button-white"></div>
            <div class="diplomas__ButtonPrev swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</div>
<?php endif; ?>