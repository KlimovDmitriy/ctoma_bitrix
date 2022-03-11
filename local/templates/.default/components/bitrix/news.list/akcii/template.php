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
<div id="actionsHome" class="actions width width_full">
  <div class="actions__title title_home width width_norm width_paddingStandart">
    <span class="title__br"></span><span class="title__text">Акции</span><span class="title__br"></span>
  </div>
  <div class="actions__content width width_paddingStandart">
    <div class="actions__slider width width_full">

      <div class="actions__swiper swiper-container">
        <div class="swiper-wrapper">

          <? foreach ($arResult["ITEMS"] as $arItem): ?>
<?
             // var_dump($arItem);
              ?>
            <div class="swiper-slide">
              <div class="actions__wrap">
                <div class="actions__img">  
                  <a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="" width="212" height="300">

                  </a>
                </div> 
                <div class="actions__info">
                  <span class="actions__infoTitle">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" hreflang="ru"><?=$arItem["NAME"];?></a>
                  </span> 
                  <span class="actions__srok">
                    <label>Срок действия акции:</label> <span><?=FormatDateFromDB($arItem['ACTIVE_TO'], 'd-m-Y');?></span>
                  </span> 
                  <span class="actions__srokText">
                    <noindex>
                      <span>
                        <?=htmlspecialcharsBack($arItem["PROPERTIES"]["TIME_TO"]["VALUE"]["TEXT"])?>
                      </span>
                    </noindex>
                  </span>  
                  <span class="actions__actions">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="actions__more">Подробности</a>
                    <a href="/form/zapisatsa-po-akcii?action_nid=<?=$arItem["ID"];?>" class="actions__zapis use-ajax">Записаться</a>
                  </span>
                </div>
              </div>
            </div>

          <? endforeach; ?>
        </div>

        <div class="actions__swiperButtonNext swiper-button-next swiper-button-white"></div>
        <div class="actions__swiperButtonPrev swiper-button-prev swiper-button-white"></div>
      </div>

    </div>
  </div>
</div>