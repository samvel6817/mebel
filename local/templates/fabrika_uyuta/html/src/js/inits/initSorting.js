import $ from 'jquery';

$('.js-sorting-item').on('click', function () {
    changeSortingTitle(this);
});

$('.js-sorting-btn').on('click', function () {
    toggleSortingDropdown(this);
});

changeDefaultSortingTitle();

function changeSortingTitle(elem) {
    const $container = $(elem).closest('.js-sorting');
    const $dropdown = $container.find('.sorting__dropdown');
    const val = $container.find(':checked').val().toString();
    const $placeholder = $container.find('.js-sorting-placeholder');
    $placeholder.text(val);
    $dropdown.slideUp()
}

function changeDefaultSortingTitle() {
    const $sortChoose = $('.js-sorting').find(':checked');
    $sortChoose.each(function () {
        const val = $(this).val();
        $(this).closest('.js-sorting').find('.js-sorting-placeholder').text(val);
    })
}

function toggleSortingDropdown(sortingBtn) {
    const $sortingBtn = $(sortingBtn);

    const $dropdown = $('.js-sorting-dropdown');
    $dropdown.slideToggle();
    checkOutsideClickForClosing($sortingBtn, function () {
        $dropdown.slideUp()
    })
}

function checkOutsideClickForClosing($allowedClickArea, onOutsideClick) {
    // Второй и третий аргументы - null, из-за ворнингов в IDE из-за передачи в качестве второго аргумента функции по ссылке
    $(document).on('click', null, null, onClick);

    function onClick(e) {
        if (!$allowedClickArea.is(e.target)
            && $allowedClickArea.has(e.target).length === 0) {
            onOutsideClick()

            // Тоже самое с null
            $(document).off('click', null, onClick)
        }
    }
}
