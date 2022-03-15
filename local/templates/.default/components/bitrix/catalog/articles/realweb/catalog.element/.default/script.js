$(function () {
    $(".twentytwenty-container").twentytwenty({
        default_offset_pct: 0.5,
        orientation: 'horizontal',
        before_label: 'До',
        after_label: 'После',
        no_overlay: false,
        move_slider_on_hover: false,
        move_with_handle_only: true,
        click_to_move: false
    });
});

$(window).scroll(function () {
    if ($(this).scrollTop() !== 0) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$('#toTop').click(function () {
    var top = $('.articleDefault__top').offset().top;
    $('body,html').animate({scrollTop: top}, 800);
});