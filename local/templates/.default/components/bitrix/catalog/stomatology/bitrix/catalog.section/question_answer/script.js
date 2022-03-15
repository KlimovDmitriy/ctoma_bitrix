$('.views-field-field-vopros-faq').click(function (e) {
    $(this).toggleClass('opened_faq')
    $(this).next().slideToggle()
})