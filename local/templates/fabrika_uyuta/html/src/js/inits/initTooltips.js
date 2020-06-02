import $ from 'jquery';

$('.js-std-tooltip').tooltipster({
        theme: 'tooltip-theme',
        contentAsHTML: true,
        interactive: true,
        maxWidth: 270,
    }
);

$('.js-product-item-colors-tooltip').tooltipster({
        theme: 'tooltip-theme',
        contentAsHTML: true,
        interactive: false,
        maxWidth: 270,
    }
);
