<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Global $APPLICATION;
$APPLICATION->SetTitle("Страница не найдена | Группа компаний «СТОМА»");
?>
    <main role="main">
        <div class="content">
            <div class="page404">
                <div class="page404__layout">
                    <div class="page404__text content_norm" style="    padding: 150px 0;">
                        <h1>Страница не найдена</h1>
                        <br>
                        <p>
                            Запрашиваемая Вами страница была удалена или перемещена.<br> Пожалуйста, воспользуйтесь
                            поиском, меню или начните с главной страницы.
                        </p>

                        <a class="button_red" style="color: #fff;" href="/">Перейти на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>