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

<div class="doctorsFilter__right text" id="all-flavors">
  <div class="doctorsFilter__selectDoctor">
      <?
      foreach ($arResult["ITEMS"] as $arItem): ?>
          <?
          $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
          );
          $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
          );
          ?>
        <div class="views-row flavor" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
          <div class="doctorsFilter__doctor">
            <div class="doctorsFilter__photo">
              <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>"/>
            </div>
            <div class="doctorsFilter__info">
        <span class="doctorsFilter__title">
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" hreflang="ru"><?= $arItem['NAME'] ?></a>
        </span>
              <span class="doctorsFilter__position"><?= $arItem['PROPERTIES']['POSITION']['VALUE'] ?></span>

              <span class="doctorsFilter__work"><label>Места работы:</label>
           <ul>
               <?php
               foreach ($arItem['CLINICS'] as $clinic): ?>
                 <li>
                                                <a href="<?= $clinic['DETAIL_PAGE_URL'] ?>"
                                                   hreflang="ru"><?= $clinic['NAME'] ?></a>
                                            </li>
               <?php
               endforeach; ?>
           </ul>
        </span>

              <span class="doctorsFilter__work"><label>Стаж работы с:</label>
           <span class="minLabel"><?= $arItem['PROPERTIES']['WORK_EXPERIENCE']['VALUE'] ?> года</span>
        </span>
                <?php
                if ($arItem['REVIEWS_COUNT']): ?>
                  <span class="doctorsFilter__work">
                <label>Отзывов:</label>
           <span class="minLabel"><?= $arItem['REVIEWS_COUNT'] ?></span>
        </span>
                <?php
                endif; ?>

        <? if ($arItem['PROPERTIES']['DOCTOR_CATEGORY']['VALUE']): ?>
        <span class="doctorsFilter__work">
            <label>Категория врача:</label>
            <span class="minLabel"><?=$arItem['PROPERTIES']['DOCTOR_CATEGORY']['VALUE'];?></span>
        </span>
        <?php endif; ?>

              <div class="doctorsFilter__action">
                <a data-form="vrac" data-vrac="<?
                echo $arItem["NAME"]; ?>" class="modaler_vrac use-ajax button_red">Записаться</a>
              </div>

            </div>
            <br>
            <br>
          </div>
        </div>


      <?
      endforeach; ?>
      <?
      if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
      <?
      endif; ?>
  </div>
</div>