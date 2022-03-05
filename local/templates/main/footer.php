<footer role="contentinfo" class="html__footer footer  width_full pace-def">
    <div class="footer__content width width_norm">
        <div class="footer__col1">
            <div class="footer__menus ">
                <div class="footer__menu width_paddingLeftRight">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
                        "ROOT_MENU_TYPE" => "bottom1",	// Тип меню для первого уровня
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "COMPONENT_TEMPLATE" => "",
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    ),
                        false
                    );?>
                </div>
                <div class="footer__menu width_paddingLeftRight">
                      <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_light", Array(
                        "ROOT_MENU_TYPE" => "bottom2",	// Тип меню для первого уровня
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "COMPONENT_TEMPLATE" => "",
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    ),
                        false
                    );?>
                </div>
                <div class="footer__menu width_paddingLeftRight">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_light", Array(
                        "ROOT_MENU_TYPE" => "bottom3",	// Тип меню для первого уровня
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "COMPONENT_TEMPLATE" => "",
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    ),
                        false
                    );?>
                </div>

                <div class="footer__menu width_paddingLeftRight">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_light", Array(
                        "ROOT_MENU_TYPE" => "bottom4",	// Тип меню для первого уровня
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "COMPONENT_TEMPLATE" => "",
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    ),
                        false
                    );?>
                </div>

                <div class="footer__menu width_paddingLeftRight">
                    <a class="footer__linkBold" href="/make-an-appointment/">Записаться</a>

                    <a data-form="callback" class="modaler footer__link">Заказать звонок</a>
                    <a data-form="zadat-vopros" class="modaler footer__link">Задать вопрос</a>
                    <a data-form="otziv" class="modaler footer__link">Контроль качества</a>

                </div>
            </div>

            <div class="footer__agreement width_paddingLeftRight">
                <a href="/agreement/">Политика конфиденциальности</a>
            </div>

            <div class="footer__c width_paddingLeftRight">
                <?php \Realweb\Site\Site::showIncludeText('COPYRIGHT'); ?>
            </div>

            <div class="footer__payment width_paddingStandart">
                <img src="/local/templates/main/images/payment.png">
            </div>

        </div>
        <div class="footer__col2">
            <div class="footerKlinic width_paddingLeftRight">
                <div class="views-row">
                    <div class="views-field views-field-field-phones">
                        <div class="field field-content call_phone_bottom"><?php \Realweb\Site\Site::showIncludeText('PHONE'); ?></div>
                    </div>
                </div>
                <div class="views-row">
                    <div class="views-field views-field-field-phones">
                        <div class="field field-content">
                            <?php \Realweb\Site\Site::showIncludeText('MAIL'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="socialsMenu_footer width_paddingStandart">
                <span class="socialsMenu__label">Присоединяйтесь</span>
                <div class="socialsMenu__content">
                    <?php \Realweb\Site\Site::showIncludeText('SOCIAL'); ?>
                </div>
            </div>
            <div class="footerLicense width_paddingLeftRight">
                <span class="footerLicense__label"><a href="/licenses/">Лицензии</a></span><br>
                <span class="footerLicense__label"><a
                            href="/sout/">Сводные данные о результатах проведения СОУТ</a></span><br>
                <span class="footerLicense__label"><a href="/covid-19/">О мерах, принятых нашей организацией для осуществления деятельности в условиях пандемии COVID-19</a></span>
            </div>
        </div>
        <span class="footer__copy width_paddingStandart">18+, ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ, НЕОБХОДИМА КОНСУЛЬТАЦИЯ СПЕЦИАЛИСТА</span>
    </div>
</footer>
<a onclick="topFunction()" id="myBtn" title="Наверх страницы"><img src="/local/templates/main/images/up.png" alt="Вверх"></a>
<!--Модальные формы -->
<div id="zadat-vopros" class="dialog" title="Задать вопрос">
    <?
    $APPLICATION->IncludeComponent(
        "realweb:rw_forms", ".default",
        array(
            "CODE" => 'zadat-vopros',
            "COMPONENT_TEMPLATE" => ".default",
            "EDIT_TEMPLATE" => ""
        ),
    );
    ?>
</div>
<div id="callback" class="dialog" title="Обратный звонок">

    <?
    $APPLICATION->IncludeComponent(
        "realweb:rw_forms", ".default",
        array(
            "CODE" => 'callback',
            "COMPONENT_TEMPLATE" => ".default",
            "EDIT_TEMPLATE" => ""
        ),
    );
    ?>
</div>
<div id="otziv" class="dialog" title="Контроль качества">

    <?
    $APPLICATION->IncludeComponent(
        "realweb:rw_forms", ".default",
        array(
            "CODE" => 'otziv',
            "COMPONENT_TEMPLATE" => ".default",
            "EDIT_TEMPLATE" => ""
        ),
    );
    ?>
</div>
<div id="nalog" class="dialog" title="Запрос документов для налогового вычета">

    <?
    $APPLICATION->IncludeComponent(
        "realweb:rw_forms", ".default",
        array(
            "CODE" => 'nalog',
            "COMPONENT_TEMPLATE" => ".default",
            "EDIT_TEMPLATE" => ""
        ),
    );
    ?>
</div>

</body>
</html>