import $ from 'jquery';

import { toggleBtnBurger } from '../utils/toggleBtnBurger'

$('.js-mobile-menu-btn').on('click', function () {
    toggleBtnBurger(this);
    toggleMobileMenu();
});

$('.js-mobile-menu-dropdown-btn').on('click', function () {
    toggleDropdownItemsInMobileMenu(this);
});

function toggleMobileMenu() {
    $('.js-mobile-menu').toggleClass('active');
}

function toggleDropdownItemsInMobileMenu(btn) {
    const $btn = $(btn);
    const $dropdown = $btn.next('.js-mobile-menu-dropdown');
    const $dropdownIcon = $btn.find('.js-mobile-menu-list-dropdown-icon');
    $dropdown.slideToggle();
    $dropdownIcon.toggleClass('active');
}
