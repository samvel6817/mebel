import Swiper from 'swiper';

const detailNavSlider = new Swiper('.js-detail-nav-slider', {
    preloadImages: false,
    lazy: {
        loadPrevNext: true,
    },
    slidesPerView: 5,
});

new Swiper('.js-detail-main-slider', {
    preloadImages: false,
    lazy: {
        loadPrevNext: true,
    },
    thumbs: {
        swiper: detailNavSlider,
        autoScrollOffset: true
    },
    spaceBetween: 25,
});
