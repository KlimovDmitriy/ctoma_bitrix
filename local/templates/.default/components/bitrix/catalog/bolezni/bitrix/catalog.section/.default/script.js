$('.bolezni__navItem').click(function () {
    if ($(this).hasClass('bolezni__navItem--all')) {
        $('.bolezni__groupItem').show();
    } else {
        var letter = $(this).data('letter');
        $('.bolezni__groupItem').each(function () {

            if ($(this).data('show') != letter) {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    }
})