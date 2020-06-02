import $ from 'jquery';

$('.js-mobile-search-btn').on('click', function () {
    openMobileSearch();
});

function openMobileSearch() {
    $('.js-mobile-search').toggleClass('active');
    $('.js-mobile-search-icon').toggleClass('active');
}
