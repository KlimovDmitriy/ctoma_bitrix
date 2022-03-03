<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<pre>
    <? print_r($arResult); ?>
</pre>
<div class="doctor__title">
    <h1 class="doctor__titleText title_norm width width_norm width_paddingStandart"><?= $arResult['NAME'] ?></h1>
</div>
<div class="doctor__mainContent white">
    <div class="doctor__content width width_norm width_paddingStandart">
        <div class="block-region-main">
            <div class="block">
                <script type='application/ld+json'>
                    {
                        "@context": "http://www.schema.org",
                        "@type": "Dentist",
                        "name": "<?= $arResult['NAME'] ?>",
                        "url": "<?= $APPLICATION->GetCurPage() ?>",
                        "telephone":"+7 (812) 321-02-01",
                        "logo": "https://ctoma.ru/themes/my_theme_old/bem/blocks/logo/img/logo.jpg",
                        "image": "<?= $arResult['DETAIL_PICTURE']['SRC'] ?>",
                        "description": "<?= $arResult['PROPERTIES']['POSITION']?>"
                    }
                </script>
                <article class="doctor__article width width_norm">
                    <div class="doctor__topWrap">
                        <div class="doctor__img">
                            <div>
                                <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['PROPERTIES']['POSITION']['VALUE'] . ' ' . $arResult['NAME'] ?>" />
                            </div>
                        </div>
                        <div class="doctor__info">
                            <?php if($arResult['PROPERTIES']['POSITION']['VALUE']): ?>)
                            <div class="doctor__field content_norm">
                                <label>Должность:</label>
                                <div><?=$arResult['PROPERTIES']['POSITION']['VALUE']?></div>
                            </div>
                            <?php endif;?>
                            <?php if($arResult['PROPERTIES']['EDUCATION']['VALUE']['TEXT']): ?>)
                                <div class="doctor__field content_norm">
                                    <label>Должность:</label>
                                    <div><?=$arResult['PROPERTIES']['EDUCATION']['VALUE']['TEXT']?></div>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>