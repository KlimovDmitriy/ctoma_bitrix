<div id="searchMap" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
     class="searchMap">
    <div class="searchMap__mapWrap width width_norm"><span class="searchMap__podR"></span> <span
                class="searchMap__podL"></span>
        <div class="searchMap__infoMap">
            <div class="searchMap__info">
                <div class="searchMap__name">
                    Колл-центр
                </div>
                <div class="searchMap__rezim_raboty"><label>Режим работы:</label> <span>Пн.-Вс. 09.00-21.00</span></div>
                <div class="searchMap__phones"><label>Звоните:</label> <span class="call_phone_clinic"><a
                                href="tel:+78125614089" style="color: rgb(216, 32, 67); text-decoration: none;">+7 (812) 561-40-89</a></span>
                </div> <!---->
                <div class="searchMap__active"><a href="/make-an-appointment" class="makeImg__button button_red">Записаться</a>
                </div>
                <div class="searchMap__callback"><a data-form="callback" class="modaler use-ajax">Заказать обратный звонок</a></div>
            </div>
            <div class="searchMap__map">
                <div id="searchMap__mapYandex" class="searchMap__mapYandex" style="width: 100%; height: 450px;">
                    <?$APPLICATION->IncludeComponent("bitrix:map.yandex.view","clinic",Array(
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => "",
                            "MAP_WIDTH" => "768",
                            "MAP_HEIGHT" => "450",
                            "CONTROLS" => array(
                                "TOOLBAR",
                                "ZOOM",
                                "SMALLZOOM",
                                "MINIMAP",
                                "TYPECONTROL",
                                "SCALELINE"
                            ),
                            "OPTIONS" => array(
                                "ENABLE_SCROLL_ZOOM",
                                "ENABLE_DRAGGING"
                            ),
                            "MAP_ID" => "yam_1"
                        )
                    );?>

                </div>
            </div>
        </div>
    </div>
</div>