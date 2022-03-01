var swiper = new Swiper('.swipe__slider', {
    navigation: {
        nextEl: '.swipe__ButtonNext',
        prevEl: '.swipe__ButtonPrev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});



var galleryThumbs = new Swiper('.stomatology__swiperThumbsWrap', {
    spaceBetween: 60,
    slidesPerView: 4,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    centerInsufficientSlides: true,
    navigation: {
        nextEl: '.stomatology__swiperThumbButtonNext',
        prevEl: '.stomatology__swiperThumbButtonPrev',
    },
});
var galleryTop = new Swiper('.stomatology__swiper', {
    spaceBetween: 32,
    navigation: {
        nextEl: '.stomatology__swiperButtonNext',
        prevEl: '.stomatology__swiperButtonPrev',
    },
    thumbs: {
        swiper: galleryThumbs
    },
    on: {
        slideChange: function () {
            let activeIndex = this.activeIndex + 1;

            let activeSlide = document.querySelector(`.stomatology__swiperThumbsWrap .swiper-slide:nth-child(${activeIndex})`);
            let nextSlide = document.querySelector(`.stomatology__swiperThumbsWrap .swiper-slide:nth-child(${activeIndex + 1})`);
            let prevSlide = document.querySelector(`.stomatology__swiperThumbsWrap .swiper-slide:nth-child(${activeIndex - 1})`);

            if (nextSlide && !nextSlide.classList.contains('swiper-slide-visible')) {
                this.thumbs.swiper.slideNext()
            } else if (prevSlide && !prevSlide.classList.contains('swiper-slide-visible')) {
                this.thumbs.swiper.slidePrev()
            }

        }
    }
});

$('.choosingClinic__info').on('click',function(){
    $('.choosingClinic__list').toggle();
})
$(document).on('click', '.choosingClinic__clinic', function (e) {
    e.preventDefault();
    $('.choosingClinic__list').hide();
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "/ajax/",
        data: {
            "ID": $(this).data('id'),
            "URL":$(this).data('url'),
            "action": 'Action_confirmClinic'
        },
        beforeSend: function () {
        },
        success: function (response) {
            if (response.url){
                location.replace(response.url);
            }
        }
    });
});
$('.menu_ml').on('click',function(){
    var elem= $(this);
    elem.toggleClass('sub_open');
    elem.toggleClass('sub_close');
    elem.parent().find(".serviceMenu__list").toggle();
});

$('.service__bottomMobile .content_toggle').click(function(){
    $('.content_block_service').slideToggle(300);
    return false;
});

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