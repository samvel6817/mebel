// $('.js-switcher').on('click', function () {
//     let switcherID = $('.catalog-switcher__title-btn.disabled').data('section');
//     let leftSection = $(`.header-catalog__1-lvl-list[data-iblock="${switcherID}"]`);
//     let loadingBlock = $('.header-catalog__subcategories-scroll-wrapper');
//
//     if (leftSection.length === 0) {
//         loadingBlock.addClass('loading');
//         const $leftElemsWrap = $('.header-catalog__categories-scroll:not(.scroll-wrapper)');
//         const $rightElemsWrap = $('.header-catalog__subcategories-scroll-wrapper');
//
//         //let activeSection = $('div.header-catalog__2-lvl-list.active');
//         const data = {sectionID: switcherID};
//         const url = "/local/ajax/ajaxSection.php";
//         const type = "POST";
//
//         jQuery.ajax({
//             url: url,
//             type: type,
//             data: data,
//             success: function (result) {
//                 //activeSection.removeClass('active');
//
//                 const elementsLeft = $(result).find('ul.header-catalog__1-lvl-list'); // Ищем левый блок
//                 const elementsRight = $(result).find('ul.header-catalog__2-lvl-list'); //Ищем правый блок
//
//                 $leftElemsWrap.append(elementsLeft[0]);
//                 $rightElemsWrap.append(elementsRight[0]);
//                 loadingBlock.removeClass('loading');
//             }
//         });
//     }
//
//     document.cookie = "sectionID=" + switcherID;
// });
//
//
// $('.header-catalog__1-lvl-item').on('click', function () {
//     const $clickedItem = $(this);
//     let nameSection = $clickedItem.find('div.header-catalog__1-lvl-link').text();
//     let mainSectionID = $clickedItem.data('subsection');
//     let rightSubSections = $(`.header-catalog__2-lvl-item[data-subcategory="${nameSection}"]`);
//     let byCategory = $('.header-catalog__1-lvl-item').closest('.header-catalog__1-lvl-list');
//
//     if (rightSubSections.length === 0) {
//
//         let loadingBlock = $('.header-catalog__subcategories-scroll-wrapper');
//         loadingBlock.addClass('loading');
//
//         let activeSection = $('.header-catalog__2-lvl-item.active');
//
//
//         let targetContainerCategories = null;
//
//         if (byCategory.hasClass("js-header-catalog-1-lvl-for-categories")) {
//             targetContainerCategories = $("ul.js-header-catalog-2-lvl-for-categories");
//         } else {
//             var targetContainerThematic = $("ul.js-header-catalog-2-lvl-for-thematic");
//         }
//
//     }
// });
//
