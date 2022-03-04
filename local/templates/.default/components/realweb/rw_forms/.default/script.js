/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: RU (Russian; русский язык)
 */
$.extend($.validator.messages, {
    required: "Это поле необходимо заполнить.",
    remote: "Пожалуйста, введите правильное значение.",
    email: "Пожалуйста, введите корректный адрес электронной почты.",
    url: "Пожалуйста, введите корректный URL.",
    date: "Пожалуйста, введите корректную дату.",
    dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
    number: "Пожалуйста, введите число.",
    digits: "Пожалуйста, вводите только цифры.",
    creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
    equalTo: "Пожалуйста, введите такое же значение ещё раз.",
    extension: "Пожалуйста, выберите файл с правильным расширением.",
    maxlength: $.validator.format("Пожалуйста, введите не больше {0} символов."),
    minlength: $.validator.format("Пожалуйста, введите не меньше {0} символов."),
    rangelength: $.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),
    range: $.validator.format("Пожалуйста, введите число от {0} до {1}."),
    max: $.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),
    min: $.validator.format("Пожалуйста, введите число, большее или равное {0}.")
});
$(document).ready(function () {

    $.datepicker.setDefaults($.datepicker.regional["ru"]);

    //Маска номера телефона
    $(".js-phone").inputmask({"mask": "+7 (999) 999-9999", "clearIncomplete": true});

    //Выбор даты
    $(".js-date").datepicker({
        minDate: '+1d'

    });
//Модальные формы
    $('.modaler').on('click', function (e) {
        var fid = $(this).data('form');
        $('#'+fid).dialog({
            width:"500px",
            minHeight:"500px",
            dialogClass:"popupDialog",
            modal:true
        });
    })


})

$("form").validate({
    errorElement: 'span'
});
$("form").on('submit', function () {
    $(this).validate({
        errorElement: 'span'
    });
    if ($("form").valid()) {
        var frm = $(this);

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/ajax/",
            data: frm.serialize(),
            success: function (response) {
                if (response.success) {
                    frm.hide();
                    $('#success_' + frm.attr('id')).show();

                }
                if (response.error) {

                    $('#error_' + frm.attr('id')).show();

                    setTimeout(function() {
                        $('#error_' + frm.attr('id')).fadeOut('fast');
                    }, 2000);

                }
                return false;
            }
        });

        return false;

    }else{
        return false;
    }
})