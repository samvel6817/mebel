import $ from 'jquery';
import Swiper from 'swiper';

new Swiper('.js-main-slider', {
    navigation: {
        nextEl: $('.js-main-slider-btn-next'),
        prevEl: $('.js-main-slider-btn-prev')
    },
    preloadImages: false,
    lazy: {
        loadPrevNext: true,
    },
    pagination: {
        el: '.js-main-slider-nav',
        clickable: true,
        renderBullet: function (index, className) {
            return '<button type="button" class="' + className + '">' +
                '<span class="swiper-pagination-bullet__inner">' +
                '<span class="swiper-pagination-bullet__dot"></span>' +
                '</span>' +
                '</button>';
        },
    },
});
