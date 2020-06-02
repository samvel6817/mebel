import $ from 'jquery';
import Swiper from "swiper";

$('.js-product-item').each(function () {
    const productItemSlider = $(this).find('.js-product-item__slider');

    const nextBtn = $(this).find('.js-product-item-nav-btn-next');
    const prevBtn = $(this).find('.js-product-item-nav-btn-prev');

    new Swiper(productItemSlider, {
        watchOverflow: true,
        lazy: true,
        navigation: {
            nextEl: nextBtn,
            prevEl: prevBtn
        }
    });

});
