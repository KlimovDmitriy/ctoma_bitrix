<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
<div id="newsHome" class="news width width_full">
    <h2 class="news__title title_homeRed width width_norm width_paddingStandart">
        <span class="title__br"></span><span class="title__text">Задайте вопрос</span><span class="title__br"></span>
    </h2>
    <div class="ask__content width width_light width_paddingStandart">
        <div class="ask__col1">

            <div class="views-element-container">
                <?php foreach ($arResult['ITEMS'] as $key => $item): ?>
                    <div class="views-row">
                        <div class="questionTeaser">
                            <div class="questionTeaser__content width width_light">

                                <div class="questionTeaser__question content_norm">
                                    <label>Вопрос:</label>
                                    <div><?= $item['PREVIEW_TEXT'] ?>
                                    </div>

                                    <div class="questionTeaser__date">
                                        <?= $item['ACTIVE_FROM'] ?>
                                    </div>
                                </div>

                                <div class="questionTeaser__more">
                                    <a class="button_red" href="<?= $item['DETAIL_PAGE_URL'] ?>">Посмотреть ответ</a>
                                </div>
                            </div>
                        </div>


                    </div>
                <?php endforeach; ?>
            </div>


        </div>
        <div class="ask__bottom">
            <a href="/voprosy-i-otvety/" class="button_red">Все вопросы</a>

            <a data-form="zadat-vopros" class="use-ajax button_blue modaler">Задать вопрос</a>

        </div>

    </div>
</div>