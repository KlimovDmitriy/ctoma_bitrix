<div class="rayon_buttons">
    <? foreach ($arResult['SECTIONS'] as &$arSection) { ?>
        <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a>
    <? } ?>
</div>