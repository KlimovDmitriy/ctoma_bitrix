<?

define("NOHTML", 0);
define("NOH1", 1);
define("NOVIEWBAD", 1);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта | Группа компаний «СТОМА»");
$APPLICATION->SetPageProperty('description', 'Карта сайта');
?>
    <div class="normPage">

        <?
        $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
          )
        );
        ?>
        <div class="normPage__container">
            <h1 class="normPage__title title_grey width width_norm width_paddingStandart">
                <span class="title__br"></span>
                <span class="title__text">Карта сайта</span>
                <span class="title__br"></span>
            </h1>
            <div class="normPage__center width width_norm width_paddingStandart">
                <div class="normPage__leftSidebar"></div>
                <div class="normPage__content">
                    <?
                    $APPLICATION->IncludeComponent(
                      "bitrix:main.map",
                      "",
                      array(
                        "LEVEL" => "3",
                        "COL_NUM" => "1",
                        "SHOW_DESCRIPTION" => "N",
                        "SET_TITLE" => "N",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600"
                      ),
                      false
                    ); ?>
                </div>
                <div class="normPage__bottomMobile"></div>
            </div>

        </div>
    </div>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>