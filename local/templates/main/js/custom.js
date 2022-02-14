var swiper = new Swiper('.swipe__slider', {
    navigation: {
        nextEl: '.swipe__ButtonNext',
        prevEl: '.swipe__ButtonPrev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});


/*const sliderImages = new Swiper('.stomatology__swiper', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.stomatology__swiperButtonNext',
        prevEl: '.stomatology__swiperButtonPrev'
    },
    grabCursor: true,
    thumbs: {
        swiper: sliderThumbs
    }
});

const sliderThumbs = new Swiper('.stomatology__sliderThumb', {
    spaceBetween: 60,
    slidesPerView: 4,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    navigation: {
        nextEl: '.stomatology__swiperThumbButtonNext',
        prevEl: '.stomatology__swiperThumbButtonPrev'
    },
    freeMode: true,
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 15
        }
    }
});
*/

// Инициализация превью слайдера
const sliderThumbs = new Swiper('.stomatology__sliderThumb', { // ищем слайдер превью по селектору
    spaceBetween: 60,
    slidesPerView: 4,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    navigation: { // задаем кнопки навигации
        nextEl: '.stomatology__swiperThumbButtonNext', // кнопка Next
        prevEl: '.stomatology__swiperThumbButtonPrev' // кнопка Prev
    },
    freeMode: true, // при перетаскивании превью ведет себя как при скролле
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 15
        }
    }
});
// Инициализация слайдера изображений
const sliderImages = new Swiper('.stomatology__swiper', { // ищем слайдер превью по селектору
    // задаем параметры
    slidesPerView: 1, // показывать по 1 изображению
    spaceBetween: 32, // расстояние между слайдами
    navigation: { // задаем кнопки навигации
        nextEl: '.stomatology__swiperButtonNext', // кнопка Next
        prevEl: '.stomatology__swiperButtonPrev' // кнопка Prev
    },
    grabCursor: true, // менять иконку курсора
    thumbs: { // указываем на превью слайдер
        swiper: sliderThumbs // указываем имя превью слайдера
    }
});