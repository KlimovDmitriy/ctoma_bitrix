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
        /*Простые формы*/
        var fid = $(this).data('form');
        $('#' + fid).dialog({
            width: "500px",
            minHeight: "500px",
            dialogClass: "popupDialog",
            modal: true,
            close: function (event, ui) {
                $('.success_form').hide();
                $('#' + fid+' form').show();
                $('#' + fid+' input').val('');

            }
        });
    })
    $('.modaler_action').on('click', function (e) {
        /*Форма записи по акции*/
        var fid = $(this).data('form');
        var act_name = $(this).data('act_name');
        $('#akc_name_' + fid).val(act_name);
        $('#akc_text_' + fid).html(act_name);
        $('#any_name_' + fid).show();
        $('#' + fid).dialog({
            width: "500px",
            minHeight: "500px",
            dialogClass: "popupDialog",
            modal: true,
            close: function (event, ui) {
                $('.success_form').hide();
                $('#' + fid+' form').show();
                $('#' + fid+' input').val('');

            }
        });


    })
    $('.modaler_vrac').on('click', function (e) {
        /*Форма записи к врачу*/
        var fid = $(this).data('form');
        var vrac_name = $(this).data('vrac');
        $('#vrac_name_' + fid).val(vrac_name);
        $('#vrac_text_' + fid).html(vrac_name);
        $('#any_name_' + fid).show();
        $('#' + fid).dialog({
            width: "500px",
            minHeight: "500px",
            dialogClass: "popupDialog",
            modal: true,
            close: function (event, ui) {
                $('.success_form').hide();
                $('#' + fid+' form').show();
                $('#' + fid+' input').val('');

            }
        });


    })
})

$("form").validate({
    errorElement: 'span'
});
$("form").on('submit', function () {
    if ($(this).prop('name') == 'doctor_filter') {
        return true;
    } else {
        $(this).validate({
            errorElement: 'span'
        });
        if ($(this).valid()) {
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

                        switch (frm.attr('id')) {
                            case 'make-an-appointment':
                                ym(10785961, 'reachGoal', 'make_appointment');
                                console.log('Цель отправлена: make_appointment');

                                dataLayer.push({
                                    'event' : 'GAEvent',
                                    'eventCategory' : 'form',
                                    'eventAction' : 'success',
                                    'eventLabel' : 'make_appointment'
                                });
                                break;

                            case 'callback':
                                ym(10785961, 'reachGoal', 'request_call');
                                console.log('Цель отправлена: request_call');

                                dataLayer.push({
                                    'event' : 'GAEvent',
                                    'eventCategory' : 'form',
                                    'eventAction' : 'success',
                                    'eventLabel' : 'request_call'
                                });

                                break;

                            case 'zadat-vopros':
                                ym(10785961, 'reachGoal', 'ask_question');
                                console.log('Цель отправлена: ask_question');

                                dataLayer.push({
                                    'event' : 'GAEvent',
                                    'eventCategory' : 'form',
                                    'eventAction' : 'success',
                                    'eventLabel' : 'ask_question'
                                });
                                break;

                            case 'otziv':
                                ym(10785961, 'reachGoal', 'quality_control');
                                console.log('Цель отправлена: quality_control');

                                dataLayer.push({
                                    'event' : 'GAEvent',
                                    'eventCategory' : 'form',
                                    'eventAction' : 'success',
                                    'eventLabel' : 'quality_control'
                                });
                                break;

                            case 'add_review':
                                ym(10785961, 'reachGoal', 'give_feedback');
                                console.log('Цель отправлена: give_feedback');

                                break;

                            case 'vrac':
                                ym(10785961, 'reachGoal', 'appointment_doctor');
                                console.log('Цель отправлена: appointment_doctor');

                                break;

                            case 'akciya':
                                ym(10785961, 'reachGoal', 'sign_up_promotion');
                                console.log('Цель отправлена: sign_up_promotion');

                                break;

                            default: // do nothing;
                                break;
                        }

                    }
                    if (response.error) {
                        if (response.error != 1) {
                            $('.error_main_text').html(response.error)
                        }
                        $('#error_' + frm.attr('id')).show();

                        setTimeout(function () {
                            $('#error_' + frm.attr('id')).fadeOut('fast');
                        }, 2000);

                    }
                    return false;
                }
            });

            return false;

        } else {
            return false;
        }
    }
})