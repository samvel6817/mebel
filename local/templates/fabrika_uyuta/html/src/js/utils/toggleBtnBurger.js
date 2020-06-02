import $ from 'jquery';

export function toggleBtnBurger(burgerBtn) {
    $(burgerBtn).find('.hamburger').toggleClass('is-active');
}
