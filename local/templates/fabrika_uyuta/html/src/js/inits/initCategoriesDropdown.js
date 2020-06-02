import $ from 'jquery';

import {toggleText} from '../utils/toggleText';

$('.js-categories-btn-more').on('click', function () {
    toggleListCategoriesDropdown();
});

function toggleListCategoriesDropdown() {
    $('.js-categories-list').slideToggle();
    const $textElem = $('.categories__btn-more-text');
    toggleText($textElem, 'Показать ещё', 'Скрыть');
}
