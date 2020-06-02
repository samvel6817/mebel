import $ from 'jquery';
import Swiper from "swiper";

$('.js-slider-universal').each(function () {
    const universalSliderNavPrev = $(this).find('.js-slider-universal-nav-prev');
    const universalSliderNavNext = $(this).find('.js-slider-universal-nav-next');
    const universalSlider = $(this).find('.js-slider-universal-container');

    new Swiper(universalSlider, {
        navigation: {
            nextEl: $(universalSliderNavNext),
            prevEl: $(universalSliderNavPrev)
        },
        preloadImages: false,
        lazy: {
            loadPrevNextAmount: 1,
        },
        watchSlidesVisibility: true,
        slidesPerView: 'auto',
        spaceBetween: 0,
        breakpoints: {
            767: {
                lazy: {
                    loadPrevNextAmount: 3,
                },
                slidesPerView: 3,
                spaceBetween: 12,
            },
            1024: {
                slidesPerView: 4,
                lazy: {
                    loadPrevNextAmount: 4,
                },
                spaceBetween: 20,
            },
            1199: {
                slidesPerView: 4,
                lazy: {
                    loadPrevNextAmount: 4,
                },
                spaceBetween: 30,
            },
        },
    });
});
