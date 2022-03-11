<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?foreach($arResult["ITEMS"] as $arElement):?>

    <div class="akciiView__row views-row">
        <div class="views-field views-field-nothing-1">
		<span class="field-content">
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
				<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="" width="213" height="300">
			</a>
		</span>
        </div>
        <div class="views-field views-field-nothing">
		<span class="field-content">
			<div class="akciiView__title">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
			</div>
			<div class="akciiView__srok"><div class="akciiView__label">Срок действия акции:</div> <?=FormatDateFromDB($arElement['ACTIVE_TO'], 'd-m-Y');?> </div>
			<div class="akciiView__kliniks">
				<div class="akciiView__label">Стоматология:</div>

				<?
                foreach ($arElement['CLINICS'] as $number) {
                    $arFilter = Array("IBLOCK_ID"=>\Realweb\Site\Site::getIblockId('clinics'), "ID"=>$number);
                    $res = CIBlockElement::GetList(Array(), $arFilter);
                    if ($ob = $res->GetNextElement()){;
                        $arFields = $ob->GetFields();
                        echo '<a href="'.$arFields["LIST_PAGE_URL"].$arFields["DETAIL_PAGE_URL"].'">'.$arFields["NAME"].'</a>, ';
                    }
                }
                ?>
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">и другие</a>
			</div>

			<div class="akciiView__more">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">ПОДРОБНОСТИ</a>
			</div>
		</span>
        </div>
    </div>

<?endforeach;?>
<?= $arResult['NAV_STRING'] ?>