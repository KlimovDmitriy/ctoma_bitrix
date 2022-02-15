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
