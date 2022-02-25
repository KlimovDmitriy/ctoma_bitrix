<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1) {
    return;
}

$arRootNode = array();
foreach ($arResult["arMap"] as $index => $arItem) {
    if ($arItem["LEVEL"] == 0) {
        $arRootNode[] = $index;
    }
}

$allNum = count($arRootNode);
$colNum = ceil($allNum / $arParams["COL_NUM"]);

?>
<div class="sitemap">
    <div class="sitemap-message">
        <div class="sitemap-box-menu sitemap-box-menu-uslugi sitemap-box">
            <ul>

                <?
                $previousLevel = -1;
                $counter = 0;
                $column = 1;
                foreach ($arResult["arMap"] as $index => $arItem):
                $arItem["FULL_PATH"] = htmlspecialcharsbx($arItem["FULL_PATH"], ENT_COMPAT, false);
                $arItem["NAME"] = htmlspecialcharsbx($arItem["NAME"], ENT_COMPAT, false);
                $arItem["DESCRIPTION"] = htmlspecialcharsbx($arItem["DESCRIPTION"], ENT_COMPAT, false);
                ?>

                <?
                if ($arItem["LEVEL"] < $previousLevel):?>
                    <?= str_repeat("</ul></li>", ($previousLevel - $arItem["LEVEL"])); ?>
                <?
                endif ?>


                <?
                if ($counter >= $colNum && $arItem["LEVEL"] == 0):
                $allNum = $allNum - $counter;
                $colNum = ceil(($allNum) / ($arParams["COL_NUM"] > 1 ? ($arParams["COL_NUM"] - $column) : 1));
                $counter = 0;
                $column++;
                ?>
            </ul>
            <ul>
                <?
                endif ?>

                <?
                if (array_key_exists(
                  $index + 1,
                  $arResult["arMap"]
                ) && $arItem["LEVEL"] < $arResult["arMap"][$index + 1]["LEVEL"]): ?>

                <li><a href="<?= $arItem["FULL_PATH"] ?>"><?= $arItem["NAME"] ?></a><?
                    if ($arParams["SHOW_DESCRIPTION"] == "Y" && strlen($arItem["DESCRIPTION"]) > 0) { ?>
                        <div><?= $arItem["DESCRIPTION"] ?></div><?
                    } ?>
                    <ul style="margin-left: 20px;">

                        <?
                        else:?>

                            <li><a href="<?= $arItem["FULL_PATH"] ?>"><?= $arItem["NAME"] ?></a><?
                                if ($arParams["SHOW_DESCRIPTION"] == "Y" && strlen($arItem["DESCRIPTION"]) > 0) { ?>
                                    <div><?= $arItem["DESCRIPTION"] ?></div><?
                                } ?></li>

                        <?
                        endif ?>


                        <?
                        $previousLevel = $arItem["LEVEL"];
                        if ($arItem["LEVEL"] == 0) {
                            $counter++;
                        }
                        ?>

                        <?
                        endforeach ?>

                        <?
                        if ($previousLevel > 1)://close last item tags
                            ?>
                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                        <?
                        endif ?>

                    </ul>
        </div>
    </div>
    <div class="sitemap-box-menu sitemap-box-menu-uslugi sitemap-box">
        <h2>Услуги</h2>
        <div class="content">
            <ul class="sitemap-menu">
                <?php
                foreach ($arResult['SERVICES'] as $service): ?>
                    <li class="expanded">
                        <a href="<?= $service['URL'] ?>"><?= $service['NAME'] ?></a>
                        <?php
                        if ($service['ELEMENTS']): ?>
                            <ul class="sitemap-menu">
                                <?php
                                foreach ($service['ELEMENTS'] as $serviceElement): ?>
                                    <li class="leaf">
                                        <a href="<?= $serviceElement['URL'] ?>"><?= $serviceElement['NAME'] ?></a>
                                    </li>
                                <?php
                                endforeach; ?>
                            </ul>
                        <?php
                        endif; ?>
                    </li>
                <?php
                endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="sitemap-box-terms sitemap-box-terms-clinics sitemap-box">
        <h2>Клиники</h2>
        <div class="content">
            <ul>
                <?php
                foreach ($arResult['CLINICS'] as $clinic): ?>
                <li>
                    <a href="<?= $clinic['URL'] ?>"><?= $clinic['NAME'] ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="sitemap-box-menu sitemap-box-menu-vraci sitemap-box">
        <div class="content">
            <h2>Врачи</h2>
            <ul>
                <?php
                foreach ($arResult['DOCTORS'] as $doctor): ?>
                    <li>
                        <a href="<?= $doctor['URL'] ?>"><?= $doctor['NAME'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>