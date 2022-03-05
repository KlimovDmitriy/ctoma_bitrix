$(document).ready(function () {
    $('.views-field-field-vopros-faq').on('click', function (e) {
        var el_id = $(this).data('id');
        if ($(this).hasClass('opened_faq')) {
            $(this).removeClass('opened_faq');

        } else {
            $(this).addClass('opened_faq');
        }
        $('.otvet-' + el_id).toggle();


    })

})
