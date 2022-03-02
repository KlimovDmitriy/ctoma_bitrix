/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: RU (Russian; русский язык)
 */

$(document).ready(function () {

    $.datepicker.setDefaults($.datepicker.regional["ru"]);

    //Маска номера телефона
    $(".js-phone").inputmask({"mask": "+7 (999) 999-9999", "clearIncomplete": true});

    //Выбор даты
    $(".js-date").datepicker({
        minDate: '+1d'

    });

    //Валидация полей
    $("form").validate({
        errorElement: 'span'
    });

    $("form").on('submit',function(){

        if ($("form").valid()) {
            alert('FORM SUBMISSION');
        }


    })

})


