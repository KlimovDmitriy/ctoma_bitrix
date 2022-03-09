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

$('.choosingClinic__info').on('click', function () {
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
            "URL": $(this).data('url'),
            "action": 'Action_confirmClinic'
        },
        beforeSend: function () {
        },
        success: function (response) {
            if (response.url) {
                location.replace(response.url);
            }
        }
    });
});
$('.menu_ml').on('click', function () {
    var elem = $(this);
    elem.toggleClass('sub_open');
    elem.toggleClass('sub_close');
    elem.parent().find(".serviceMenu__list").toggle();
});

$('.service__bottomMobile .content_toggle').click(function () {
    $('.content_block_service').slideToggle(300);
    return false;
});

$('.glavnoeMenu__ul .parentLink').hover(function () {
    clearTimeout($.data(this, 'timer'));
    $('ul', this).stop(true, true).slideDown(200);
}, function () {
    $.data(this, 'timer', setTimeout($.proxy(function () {
        $('ul', this).stop(true, true).slideUp(200);
    }, this), 100));
});

$('.menuMobile').each(function () {
    var menu = $(this);
    $('.menuMobile__button', menu).click(function () {
        if (menu.hasClass('menuMobile_active')) {
            menu.removeClass('menuMobile_active');
        } else {
            menu.addClass('menuMobile_active');
        }
    });
});

$('.plusDoctorWr .plusDoctorN').click(function () {
    $(this).parent().next().toggleClass('menuMobileDortorUl');
    $(this).prev().toggleClass('menuMobileDortor');
});
/*Кнопка наверх*/
mybutton = document.getElementById("myBtn");
window.onscroll = function () {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
};


function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/*Кнопка наверх*/
/*Показать поиск в мобильной версии*/
$('.header__searchMobileButton').on('click',function(){
    $('.header__searchMobile').toggle();
})