if (!window.BX_YMapAddPlacemark) {
    window.BX_YMapAddPlacemark = function (map, arPlacemark) {
        if (null == map)
            return false;

        if (!arPlacemark.LAT || !arPlacemark.LON)
            return false;

        var props = {};
        if (null != arPlacemark.TEXT && arPlacemark.TEXT.length > 0) {
            var value_view = '';

            if (arPlacemark.TEXT.length > 0) {
                var rnpos = arPlacemark.TEXT.indexOf("\n");
                value_view = rnpos <= 0 ? arPlacemark.TEXT : arPlacemark.TEXT.substring(0, rnpos);
            }

            props.balloonContent = '';
            props.hintContent = value_view;
        }

        var obPlacemark = new ymaps.Placemark(
            [arPlacemark.LAT, arPlacemark.LON],
            props,
            {
                iconImageHref: '/local/templates/main/images/map_icon.png',
                iconImageSize: [30, 30],
                balloonCloseButton: true,
                iconLayout: 'default#image',
            }
        );
        /* Cобытие клика по метке */
        obPlacemark.events.add('click', function () {
            select_clinic(obPlacemark);
        });
        map.geoObjects.add(obPlacemark);
        return obPlacemark;
    }
}


function select_clinic() {
    alert('asd')
}
BX_TestFunc = function(map, startCoords, endCoords) {
    var multiRoute = new ymaps.multiRouter.MultiRoute({
        // Описание опорных точек мультимаршрута.
        referencePoints: [
            startCoords,
            endCoords
        ],
        // Параметры маршрутизации.
        params: {
            // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
            results: 2
        }
    }, {
        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
        boundsAutoApply: true
    });
    map.geoObjects.add(multiRoute);
};
//
