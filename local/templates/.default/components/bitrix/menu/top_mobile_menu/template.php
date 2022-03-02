<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
  <ul class="menuHeader__ul">
    <li class="menuHeader__li menuHeader__mobile">
        <a class="menuHeader__a" href="/">Главная</a>
    </li>

  <?
  $previousLevel = 0;
foreach($arResult as $arItem):?>

  <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?endif?>

  <?if ($arItem["IS_PARENT"]):?>

  <?if ($arItem["DEPTH_LEVEL"] == 1):?>
  <li class="menuHeader__li parentLink">
            <?if ($arItem["SELECTED"]):?>
            <div class="plusDoctorWr">
                        <span class="menuHeader__a"><?=$arItem["TEXT"]?></span>
                        <span class="plusDoctorN">+</span>
            </div>
            <?else:?>
            <div class="plusDoctorWr">
                <a href="<?=$arItem["LINK"]?>" class="menuHeader__a"><?=$arItem["TEXT"]?></a>
                <span class="plusDoctorN">+</span>
            </div>
            <?endif?>
  <ul class="glavnoeMenu__ul subMenuDoctorN">
  <?else:?>
  <li class="menuHeader__li"><a href="<?=$arItem["LINK"]?>" class="parent menuHeader__a"><?=$arItem["TEXT"]?></a>
  <ul>
  <?endif?>

  <?else:?>

    <?if ($arItem["PERMISSION"] > "D"):?>

      <?if ($arItem["DEPTH_LEVEL"] == 1):?>
              <li class="menuHeader__li">
              <?if ($arItem["SELECTED"]):?>
                  <span class="menuHeader__a"><?=$arItem["TEXT"]?></span>
              <?else:?>
                  <a href="<?=$arItem["LINK"]?>" class="menuHeader__a"><?=$arItem["TEXT"]?></a>
              <?endif?>
              </li>
      <?else:?>
              <li class="glavnoeMenu__li">
                  <?if ($arItem["SELECTED"]):?>
                      <span class="menuHeader__a"><?=$arItem["TEXT"]?></span>
                  <?else:?>
                      <a href="<?=$arItem["LINK"]?>" class="glavnoeMenu__a"><?=$arItem["TEXT"]?></a>
                  <?endif?>
              </li>
      <?endif?>

    <?else:?>

      <?if ($arItem["DEPTH_LEVEL"] == 1):?>
        <li class="glavnoeMenu__li"><a href="" class="<?if ($arItem["SELECTED"]):?>active<?else:?>glavnoeMenu__a<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
      <?else:?>
        <li class="glavnoeMenu__li"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
      <?endif?>

    <?endif?>

  <?endif?>

  <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

  <?if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
  <?endif?>

  </ul>
<?endif?>