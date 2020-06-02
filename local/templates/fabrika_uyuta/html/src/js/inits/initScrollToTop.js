import $ from 'jquery';

$('.js-scroll-top').on('click', function () {
    scrollToTop();
});

function scrollToTop() {
    $('body, html').animate({
        scrollTop: 0
    }, 400);
}
