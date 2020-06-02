import $ from 'jquery';

$('.js-product-list-bottom-ajax-replace').on('click', '.js-ajax-load-more', function() {
    ajaxLoadMoreProductItems(this);
});

function ajaxLoadMoreProductItems(btn) {
    const $preloader = $('.js-product-list-preloader');
    const $btn = $(btn);
    const url = $btn.attr('data-url');

    if (url !== undefined) {
        $preloader.addClass('loading');
        $btn.addClass('loading');
        $btn.attr('disabled', 'disabled');

        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
        }).then(data => {
            const $ajaxNewProductItems = $(data).find('.js-product-grid-item');
            const $ajaxNewBtnContainer = $(data).find('.js-ajax-load-more-btn-container');
            const $ajaxNewBottomBar = $(data).find('.js-product-list-bottom-bar-ajax-replace');

            $('.js-product-list-grid').append($ajaxNewProductItems);
            $('.js-ajax-load-more-btn-container').replaceWith($ajaxNewBtnContainer);
            $('.js-product-list-bottom-bar-ajax-replace').replaceWith($ajaxNewBottomBar);

            $preloader.removeClass('loading');
        })
    }
}
