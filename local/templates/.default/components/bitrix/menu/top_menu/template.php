<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
  <ul class="glavnoeMenu__ul">

  <?
  $previousLevel = 0;
foreach($arResult as $arItem):?>

  <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?endif?>

  <?if ($arItem["IS_PARENT"]):?>

  <?if ($arItem["DEPTH_LEVEL"] == 1):?>
  <li class="glavnoeMenu__li parentLink">
    <?if($APPLICATION->GetCurPage()==$arItem["LINK"]):?>
                <span class="glavnoeMenu__a"><?=$arItem["TEXT"]?></span>
            <?else:?>
                <a href="<?=$arItem["LINK"]?>" class="glavnoeMenu__a"><?=$arItem["TEXT"]?></a>
            <?endif?>
  <ul class="glavnoeMenu__ul subMenuDoctorN">
  <?else:?>
  <li class="glavnoeMenu__li"><a href="<?=$arItem["LINK"]?>" class="parent glavnoeMenu__a"><?=$arItem["TEXT"]?></a>
  <ul>
  <?endif?>

  <?else:?>

    <?if ($arItem["PERMISSION"] > "D"):?>

      <?if ($arItem["DEPTH_LEVEL"] == 1):?>
              <li class="glavnoeMenu__li">
                  <?if($APPLICATION->GetCurPage()==$arItem["LINK"]):?>
                  <span class="glavnoeMenu__a"><?=$arItem["TEXT"]?></span>
              <?else:?>
                  <a href="<?=$arItem["LINK"]?>" class="glavnoeMenu__a"><?=$arItem["TEXT"]?></a>
              <?endif?>
              </li>
      <?else:?>
              <li class="glavnoeMenu__li">
                  <?if($APPLICATION->GetCurPage()==$arItem["LINK"]):?>
                      <span class="glavnoeMenu__a"><?=$arItem["TEXT"]?></span>
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