import $ from 'jquery';

const $floatingBtn = $('.js-filter-floating-btn');
const $rangeSliders = $('.js-range-slider');
const $filterDropdownBtns = $('.js-filter-dropdown-btn');

$filterDropdownBtns.on('click', function () {
    toggleDropdownFilterSection(this);
});

$('.js-filters-reset').on('click', function () {
    resetFilter($rangeSliders, $filterDropdownBtns);
});

$('.js-filter-range-from-input').on('keyup', function () {
    updateRangeSliderInputFromValue(this);
});

$('.js-filter-range-to-input').on('keyup', function () {
    updateRangeSliderInputToValue(this);
});

$('.js-filter-checkbox').on('click', function () {
    updateCheckedOptionsSectionFilterCounter(this);
});

$('.js-filter-open').on('click', function () {
    $('.js-filters').slideToggle();
});

$('.js-filter-scroll').scrollbar();

$('.js-filter-submit-btn').on('click', function () {
    $('.js-product-list-preloader').addClass('loading');
    $('.js-filter-submit-btn').addClass('loading-products').attr('disabled', 'true')
});

initRangeSliders($rangeSliders);

function initRangeSliders($rangeSliders) {
    $rangeSliders.each(function () {
        $(this).ionRangeSlider({
            onChange: ({from, to}) => {
                const $filterRange = $(this).closest('.js-filter-range');
                const $filterRangeInputFrom = $filterRange.find('.js-filter-range-from-input');
                const $filterRangeInputTo = $filterRange.find('.js-filter-range-to-input');

                $filterRangeInputFrom.val(from);
                $filterRangeInputTo.val(to);

                changeFloatingButtonVisibility($floatingBtn);
                changeFloatingButtonOffset($floatingBtn, $filterRange);
            },
        });
    });
}

let timerId = null;

function changeFloatingButtonVisibility($floatingBtn) {
    $floatingBtn.addClass('visible');

    clearTimeout(timerId);
    timerId = setTimeout(hideFilterFloatingBtn, 15000);

    function hideFilterFloatingBtn() {
        $floatingBtn.removeClass('visible')
    }
}


function changeFloatingButtonOffset($floatingBtn, $initSection) {
    const offset = $initSection.offset();

    const positionLeft = offset.left + ($initSection.outerWidth() + 15);
    const positionTop = offset.top + ($initSection.outerHeight(true) / 2 - 20);

    const result = {top: positionTop, left: positionLeft}

    $floatingBtn.offset(result);
}

function toggleDropdownFilterSection(dropdownBtn) {
    const $dropdownBtn = $(dropdownBtn);
    $dropdownBtn.closest('.js-filter-dropdown').find('.js-filter-dropdown-content').slideToggle();
    $dropdownBtn.toggleClass('filter-dropdown__title-btn_open');
}

function resetFilter($rangeSliders, $dropdownBtns) {
    $dropdownBtns.removeClass('filter-dropdown__title-btn_selected');

    $('.filter-dropdown__count').text('0');

    $('.js-filter-bar-text').text('Выбрать фильтры');
    $('.js-filter-bar').removeClass('filter-bar_active');

    $rangeSliders.each(function () {
        $(this).data("ionRangeSlider").reset();
    });
}

function updateRangeSliderInputFromValue(input) {
    const $input = $(input);
    const min = $input.data('min');
    const from = $input.val();
    const rangeSlider = $input.closest('.js-filter-range').find('.js-range-slider').data("ionRangeSlider");

    rangeSlider.update({
        from: from >= min ? from : min
    });

    const $container = $input.closest('.js-filter-range');
    changeFloatingButtonVisibility($floatingBtn);
    changeFloatingButtonOffset($floatingBtn, $container);
}

function updateRangeSliderInputToValue(input) {
    const $input = $(input);
    const max = $input.data('max');
    const to = $input.val();
    const rangeSlider = $input.closest('.js-filter-range').find('.js-range-slider').data("ionRangeSlider");

    rangeSlider.update({
        to: to <= max ? to : max
    });

    const $container = $input.closest('.js-filter-range');
    changeFloatingButtonVisibility($floatingBtn);
    changeFloatingButtonOffset($floatingBtn, $container);
}

function selectTitleByChangedFiltersLength(number, titles) {
    const cases = [2, 0, 1, 1, 1, 2];

    if ((number % 100 > 4 && number % 100 < 20)) {
        return titles[2]
    } else if (number % 10 < 5) {
        return titles[cases[number % 10]]
    } else {
        return titles[cases[5]]
    }
    // return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
}

function updateCheckedOptionsSectionFilterCounter(elem) {
    const $container = $(elem).closest('.js-filter-dropdown');
    const checkedLength = $container.find(':checked').length;
    const $btn = $container.find('.js-filter-dropdown-btn');
    const $counter = $container.find('.filter-dropdown__count');

    if (checkedLength > 0) {
        $btn.addClass('filter-dropdown__title-btn_selected');
        $counter.text(checkedLength)
    } else {
        $btn.removeClass('filter-dropdown__title-btn_selected');
    }

    const $filterBar = $('.js-filter-bar');
    const changedFiltersLength = $('.filter-dropdown__title-btn_selected').length;
    if (changedFiltersLength === 0) {
        $('.js-filter-bar-text').text('Выбрать фильтры');
        $filterBar.removeClass('filter-bar_active');
    } else {
        const filterDeclFirstText = selectTitleByChangedFiltersLength(changedFiltersLength, ['Выбран', 'Выбрано', 'Выбрано']);
        const filterDeclSecondText = selectTitleByChangedFiltersLength(changedFiltersLength, ['параметр', 'параметра', 'параметров']);

        $('.js-filter-bar-text').text(`${filterDeclFirstText} ${changedFiltersLength} ${filterDeclSecondText}`);

        $filterBar.addClass('filter-bar_active');
    }

    changeFloatingButtonVisibility($floatingBtn);
    changeFloatingButtonOffset($floatingBtn, $container)
}
