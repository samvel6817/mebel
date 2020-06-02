import $ from 'jquery';
import debounce from "debounce";

const showSearchHint = debounce(function (event) {
    $.get('/app/search-hint', {query: event.target.value}).then((res) => {
        $('.header-search__results').html(res);
        markSearchHintMatches();
    });
}, 500);

$('.js-header-search-input')
    .on('input', showSearchHint)
    .on('input', () => $('.js-search-results').addClass('loading'));

function markSearchHintMatches() {
    const $searchInput = $('.js-header-search-input');
    const $itemsNames = $('.js-search-results-item-name');
    const $itemsVendorCodes = $('.js-search-results-vendor-code');

    const keyword = $searchInput.val().toString();

    const option = {
        'ignorePunctuation': [
            '/',
            '-',
            '.',
            '(',
            ')',
            ':',
            '+'
        ]
    };

    $itemsNames.unmark({
        done: function () {
            $itemsNames.mark(keyword, option);
        }
    });

    $itemsVendorCodes.unmark({
        done: function () {
            $itemsVendorCodes.mark(keyword, option);
        }
    });
}
