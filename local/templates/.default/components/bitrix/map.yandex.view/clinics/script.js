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
                balloonCloseButton: true
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

$(document).ready(function () {
    $('.searchMap__inputSend').bind('click', function () {
        var adr = $('.searchMap__input').val();
        var q = 'Санкт-Петербург, ' + adr;
        var minDistanse = 0;
        var myGeocoder = ymaps.geocode(q);
        myGeocoder.then(function (res) {
            var cords = res.geoObjects.get(0).geometry.getCoordinates()

            var questionPos = cords;
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/ajax/",
                data: {
                    "ID": $(this).data('id'),
                    "URL": $(this).data('url'),
                    "action": 'Action_getAllClinicsCoords'
                },
                beforeSend: function () {
                },
                success: function (response) {
                    var all_clinics = JSON.parse(response)

                    all_clinics.forEach(function (element, index) {
                        var distance = ymaps.coordSystem.geo.getDistance([element.LAT, element.LON], questionPos);

                        if (minDistanse == 0) {

                            minDistanse = distance;
                            clinic = element;
                        } else {
                            if (distance <= minDistanse) {
                                minDistanse = distance;
                                clinic = element;
                            }
                        }
                    });



                    console.log(clinic)
                }
            });


        });

    })


})
