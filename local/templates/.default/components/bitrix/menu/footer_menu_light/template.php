<ul class="footerMenu__ul" role="menu">
    <?
    $previousLevel = 0;
    foreach ($arResult as $arItem):?>
        <li class="footerMenu__li"><a class="footerMenu__a"
                                                         href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>

    <? endforeach ?>
</ul>