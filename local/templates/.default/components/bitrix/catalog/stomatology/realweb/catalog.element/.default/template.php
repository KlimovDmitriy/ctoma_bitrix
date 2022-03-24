<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];
ob_start();
?>
    <h1 class="service__titleText title_norm width width_norm width_paddingStandart"><? echo $name; ?></h1>
    <div class="serviceDefault content_norm">
        <?php echo $arResult['DETAIL_TEXT']; ?>
        <?php if($arResult['PRICE_LIST']):
            $i = 0;?>
            <div class="praiseTable">
                <div>
                    <div>
                        <div class="praiseTable__group">
                            <div class="praiseTable__nameGroup">
                                <div><?= $arResult['PRICE_LIST']['NAME'] ?></div>
                            </div>
                            <div class="praiseTable__list">
                                <?php
                                foreach ($arResult['PRICE_LIST']['ITEMS'] as $item): ?>
                                    <div class="praiseTable__row <?= $i % 2 == 0 ? 'odd' : 'even' ?>">
                                        <div class="praiseTable__name">
                                            <?= $item['NAME'] ?>
                                        </div>
                                        <div class="praiseTable__cena">
                                            <?= $item['PROPERTY_PRICE_VALUE']; ?>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endforeach; ?>
                                <?php
                                if ($arResult['PRICE_LIST']['SUBSECTION']): ?>
                                    <?php
                                    foreach ($arResult['PRICE_LIST']['SUBSECTION'] as $key => $subsection): ?>
                                        <div class="praiseTable__row <?= $i++ % 2 == 0 ? 'odd' : 'even' ?>">
                                            <div class="praiseTable__delimiter">
                                                <div><?= $subsection['NAME'] ?></div>
                                            </div>
                                        </div>
                                        <?php
                                        foreach ($arResult['PRICE_LIST']['SUBSECTION'][$key]['ITEMS'] as $item): ?>
                                            <div class="praiseTable__row <?= $i % 2 == 0 ? 'odd' : 'even' ?>">
                                                <div class="praiseTable__name">
                                                    <?= $item['NAME'] ?>
                                                </div>
                                                <div class="praiseTable__cena">
                                                    <?= $item['PROPERTY_PRICE_VALUE']; ?>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                        endforeach; ?>
                                    <?php
                                    endforeach; ?>
                                <?php
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!$arResult['PROPERTIES']['HIDE_BUTTON']):?>
            <div class="service__zapisatsa">
                <a href="/make-an-appointment" class="button_red" target="_blank">Записаться</a>
            </div>
        <?php endif; ?>
        <?php echo $arResult['PREVIEW_TEXT']; ?>
    </div>
<?php // передаем данные буфера вывода в файл component_epilog.php
$this->__component->SetResultCacheKeys(array("CACHED_TPL"));

$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();

ob_get_clean();
?>