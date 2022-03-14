var reviewsMain = new Swiper('.reviews__swiper', {
    navigation: {
        nextEl: '.reviews__swiperButtonNext',
        prevEl: '.reviews__swiperButtonPrev',
    },
    paginationClickable: true,
    spaceBetween: 30,
    effect: 'fade',
    loop: true
});