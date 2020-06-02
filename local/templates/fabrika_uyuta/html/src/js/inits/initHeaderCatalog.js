import $ from 'jquery';
import 'jquery.scrollbar';

import {toggleBtnBurger} from "../utils/toggleBtnBurger";

const $listSubcategories = $('.js-header-catalog-2-lvl-list');

$listSubcategories.on('click', '.js-header-catalog-dropdown-btn', function () {
    toggleMobileHeaderCategoryCatalogDropdown(this);
});

$('.js-catalog-btn').on('click', function () {
    openHeaderCatalog();
    toggleBtnBurger(this);
});

const $mainItems = $('.js-header-catalog-1-lvl-link');

$mainItems.on('mouseover', function () {
    ajaxLoadingCategory(this);
});

function openHeaderCatalog() {
    $('.js-header-catalog').slideToggle();

    $('.js-header-catalog-categories-scroll').scrollbar();
    $('.js-header-catalog-subcategories-scroll').scrollbar();
}

function toggleMobileHeaderCategoryCatalogDropdown(dropdownBtn) {
    const $dropdownBtn = $(dropdownBtn);

    $dropdownBtn.closest('.js-header-catalog-2-lvl-wrapper').find('.js-header-catalog-3-lvl-dropdown').slideToggle();
    $dropdownBtn.find('.js-header-catalog-icon-more').toggleClass('dropdown-open');
}

function ajaxLoadingCategory(clickedItem) {
    const $clickedMainItem = $(clickedItem);
    const $preloader = $('.js-preloader-for-subcategories');

    $mainItems.removeClass('active');
    $clickedMainItem.addClass('active');

    $preloader.addClass('loading');

    if ($clickedMainItem.hasClass('loaded')) {
        switchCategory($clickedMainItem);
        $preloader.removeClass('loading');
    } else {
        const data = {sectionID: $clickedMainItem.attr('data-subsection-id')};
        const url = "/local/ajax/ajaxSection.php";
        const type = "POST";

        $.ajax({
            url: url,
            type: type,
            data: data,
        }).then(data => {
            $('.js-header-catalog-2-lvl-list').append(data);
            $clickedMainItem.addClass('loaded');
            if ($clickedMainItem.hasClass('active')) {
                switchCategory($clickedMainItem);
            }
            $preloader.removeClass('loading');
        })
    }
}

function switchCategory($clickedMainItem) {
    $('.js-header-catalog-2-lvl-item.active').removeClass('active');

    const $leftMenuWrapper = $('.js-header-catalog-categories-wrapper');
    const $rightMenuWrapper = $('.js-header-catalog-subcategories-wrapper');
    $leftMenuWrapper.addClass('mobile-move-left');
    $rightMenuWrapper.addClass('mobile-move-left');

    const itemDataSubsectionName = $clickedMainItem.attr('data-subsection-name');
    $listSubcategories.find('[data-subsection-name="' + itemDataSubsectionName + '"]').addClass('active');

    $('.js-header-catalog-back-btn-text').html(itemDataSubsectionName);

    $('.js-header-catalog-back-btn').on('click', function () {
        $('.js-header-catalog-2-lvl-item').removeClass('active');
        $leftMenuWrapper.removeClass('mobile-move-left');
    });
}
