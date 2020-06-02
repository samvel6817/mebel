<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>

<div class="product-list__content">
    <div class="filter-bar js-filter-open">
        <div class="filter-bar__inner">
            <div class="filter-bar__icon">
                <svg height="0.75rem" viewBox="0 0 12 12" width="0.75rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 3.999h2a1 1 0 010 2H5a1 1 0 010-2zm-4-4a1 1 0 011 1v10a1 1 0 11-2 0v-10a1 1 0 011-1zm5 0a1 1 0 110 2 1 1 0 010-2zm5 0a1 1 0 011 1v10a1 1 0 01-2 0v-10a1 1 0 011-1zm-5 8a1 1 0 011 1v2a1 1 0 01-2 0v-2a1 1 0 011-1z" fill="#999"></path>
                </svg>
            </div>
            <span class="filter-bar__text js-filter-bar-text">Фильтр</span>
        </div>
        <div class="filter-bar__more">
            <svg height="0.1875rem" viewBox="0 0 13 3" width="0.8125rem" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.498-.001a1.5 1.5 0 11.002 3 1.5 1.5 0 01-.002-3zm5 0a1.5 1.5 0 110 3.001 1.5 1.5 0 010-3.001zm5 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3z" fill="#999"></path>
            </svg>
        </div>
    </div>
    <div class="product-list__bar">
        <div class="sorting js-sorting">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/catalog/sort_btn_title.php"
                )
            );?>
            <div class="sorting__dropdown js-sorting-dropdown">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/catalog/sort_btn.php"
                    )
                );?>
            </div>
        </div>
        <div class="view-control hidden-xs">
            <div class="view-control__count">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/catalog/page_element_count.php"
                    )
                );?>
            </div>
        </div>
    </div>
    <div class="product-list__grid js-product-list-grid">
        <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK']);
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK']);
            ?>

            <div class="product-list__grid-item js-product-grid-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="product-item product-item_product-list js-product-item">
                    <div class="product-item__top">
                        <div class="product-item__img-wrapper">
                            <div class="product-item__slider js-product-item__slider swiper-container swiper-container-initialized swiper-container-horizontal">
                                <a href="" class="swiper-wrapper">
                                    <div class="product-item__slide swiper-slide swiper-slide-active" style="width: 265px;">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt="" class="product-item__img swiper-lazy swiper-lazy-loaded">

                                    </div>
                                    <div class="product-item__slide swiper-slide swiper-slide-next" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt="" class="product-item__img swiper-lazy product-item__img_cover">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                    <div class="product-item__slide swiper-slide" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt="" class="product-item__img swiper-lazy product-item__img_cover">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                    <div class="product-item__slide swiper-slide" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt="" class="product-item__img swiper-lazy">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                    <div class="product-item__slide swiper-slide" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt="" class="product-item__img swiper-lazy">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                    <div class="product-item__slide swiper-slide" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt="" class="product-item__img swiper-lazy">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                    <div class="product-item__slide swiper-slide" style="width: 265px;">
                                        <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt="" class="product-item__img swiper-lazy">
                                        <div class="swiper-lazy-preloader preloader"></div>
                                    </div>
                                </a>
                                <button type="button" class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="7">
                                        <path fill="#999" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="7">
                                        <path fill="#999" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                    </svg>
                                </button>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>

                        <div class="product-item__top-bar">
                            <div class="product-item__markers">
                                <div class="marker marker__blue js-std-tooltip tooltipstered">
                                    новинка
                                </div>
                            </div>
                            <div class="product-item__btns">
                                <button type="button" class="product-add-btn product-add-btn_added js-std-tooltip tooltipstered">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path class="product-add-btn__icon" fill="#999" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="product-add-btn js-std-tooltip tooltipstered">
                                    <svg class="product-add-btn__icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path class="product-add-btn__icon" d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z" fill="#999"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom">
                        <div class="product-item__content-wrapper">
                            <div class="product-item__col-direction">
                                <div class="product-item__rating">
                                    <div class="rating rating_2">
                                        <svg class="rating__icon" height="0.625rem" viewBox="0 0 10 10"
                                             width="0.625rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.998.004l1.5 3.357 3.5.463L7.425 6.36l.663 3.644-3.09-1.79-3.09 1.79.662-3.644-2.572-2.537 3.5-.463z"></path>
                                        </svg>
                                        <svg class="rating__icon" height="0.625rem" viewBox="0 0 10 10"
                                             width="0.625rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.998.004l1.5 3.357 3.5.463L7.425 6.36l.663 3.644-3.09-1.79-3.09 1.79.662-3.644-2.572-2.537 3.5-.463z"></path>
                                        </svg>
                                        <svg class="rating__icon" height="0.625rem" viewBox="0 0 10 10"
                                             width="0.625rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.998.004l1.5 3.357 3.5.463L7.425 6.36l.663 3.644-3.09-1.79-3.09 1.79.662-3.644-2.572-2.537 3.5-.463z"></path>
                                        </svg>
                                        <svg class="rating__icon" height="0.625rem" viewBox="0 0 10 10"
                                             width="0.625rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.998.004l1.5 3.357 3.5.463L7.425 6.36l.663 3.644-3.09-1.79-3.09 1.79.662-3.644-2.572-2.537 3.5-.463z"></path>
                                        </svg>
                                        <svg class="rating__icon" height="0.625rem" viewBox="0 0 10 10"
                                             width="0.625rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.998.004l1.5 3.357 3.5.463L7.425 6.36l.663 3.644-3.09-1.79-3.09 1.79.662-3.644-2.572-2.537 3.5-.463z"></path>
                                        </svg>
                                    </div>
                                    <span class="product-item__count-rating">24</span>
                                </div>

                                <?php if($arItem['DISPLAY_PROPERTIES']['UF_VENDOR_CODE']):?>
                                    <div class="product-item__vendor-code">
                                        <span class="vendor-code"><?=$arItem['DISPLAY_PROPERTIES']['UF_VENDOR_CODE']['VALUE']?></span>
                                    </div>
                                <?php endif;?>

                                <?php if($arItem['DISPLAY_PROPERTIES']['UF_IN_STOCK']):?>
                                    <div class="product-item__availability">
                                        <span class="availability availability_yes">В наличии</span>
                                    </div>
                                <?php else:?>
                                    <div class="product-item__availability">
                                        <span class="availability availability_no">Под заказ (3 дня)</span>
                                    </div>
                                <?php endif;?>

                            </div>
                            <div class="product-item__row-direction">
                                <div class="product-options-icon js-std-tooltip"
                                     title="На странице товара можно выбрать цвет">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/html/build/img/svg/product-options-icon/palette.svg" alt=""
                                         class="product-options-icon__svg">
                                </div>
                                <div class="product-options-icon js-std-tooltip"
                                     title="На странице товара можно выбрать опции">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/html/build/img/svg/product-options-icon/cog.svg" alt=""
                                         class="product-options-icon__svg">
                                </div>
                                <div class="product-options-icon js-std-tooltip"
                                     title="У этого товара есть серия мебели">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/html/build/img/svg/product-options-icon/loveseat.svg" alt=""
                                         class="product-options-icon__svg">
                                </div>
                            </div>
                        </div>

                        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="product-item__name">
                            <?=$arItem['NAME'];?>
                        </a>

                        <div class="product-item__prices">
                            <span class="old-price">24 990</span>
                            <?
                            $arCurFormat = CCurrencyLang::CurrencyFormat($arItem['MIN_PRICE']['VALUE'], 0);
                            $formatPrice = str_replace(".00", "", $arCurFormat);
                            ?>
                            <span class="price"><?= $formatPrice; ?>
                                <span class="price__currency">₽</span>
                                <span class="price__unit">/шт.</span>
                            </span>
                        </div>

                        <div class="product-item__main-btns">
                            <div class="product-item__quantity">
                                <div class="quantity">
                                    <button type="button" class="quantity__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             width="10">
                                            <path fill="#999"
                                                  d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                        </svg>
                                    </button>
                                    <div class="quantity__change-count" contenteditable="true">1</div>
                                    <button type="button" class="quantity__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             width="10">
                                            <path fill="#999"
                                                  d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="product-item__add-cart">
                                <button class="btn btn_green btn_small">Купить</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-item__dropdown">
                        <!-- Блок опций ниже(product-item__options) видит только администратор -->
                        <div class="product-item__colors js-product-item-colors-scroll custom-scroll scrollbar-inner">
                            <div class="product-item__colors-scroll">
                                <div class="product-item__colors-item">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_1.jpg"
                                         alt="Цвет: Венге"
                                         class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_2.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Оак">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_3.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Бежевый">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_4.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Красный">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_5.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_6.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_7.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_8.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_9.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_10.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-leather-img_11.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-material-img_1.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-material-img_2.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-material-img_3.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-material-img_4.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-material-img_5.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-wood-img_1.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-wood-img_2.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                                <div class="product-item__colors-item">
                                    <img
                                            src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/test-product-img/materials/originals/test-product-wood-img_3.jpg"
                                            alt="Цвет: какой-то"
                                            class="product-item__colors-img js-product-item-colors-tooltip" title="Венге">
                                </div>
                            </div>
                        </div>

                        <div class="product-item__sizes">
                            <div class="size">
                                <?php if($arItem['DISPLAY_PROPERTIES']['UF_WIDTH']):?>
                                    <span class="size__item">
                                        <span class="size__name">Ширина</span>
                                        <span class="size__separator"></span>
                                        <span class="size__value"><?=round($arItem['DISPLAY_PROPERTIES']['UF_WIDTH']['VALUE'])?> мм</span>
                                    </span>
                                <?php endif;?>
                                <?php if($arItem['DISPLAY_PROPERTIES']['UF_HEIGHT']):?>
                                    <span class="size__item">
                                        <span class="size__name">Высота</span>
                                        <span class="size__separator"></span>
                                        <span class="size__value"><?=round($arItem['DISPLAY_PROPERTIES']['UF_HEIGHT']['VALUE'])?> мм</span>
                                    </span>
                                <?php endif;?>
                                <?php if($arItem['DISPLAY_PROPERTIES']['UF_DEPTH']):?>
                                    <span class="size__item">
                                        <span class="size__name">Глубина</span>
                                        <span class="size__separator"></span>
                                        <span class="size__value"><?=round($arItem['DISPLAY_PROPERTIES']['UF_DEPTH']['VALUE'])?> мм</span>
                                    </span>
                                <?php endif;?>
                            </div>
                        </div>

                        <?php if($arItem['DISPLAY_PROPERTIES']['UF_OTHER_TEXT']):?>
                            <span class="product-item__notice"><?=$arItem['DISPLAY_PROPERTIES']['UF_OTHER_TEXT']['VALUE']?></span>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        <? endforeach; ?>
        <div class="product-list__grid-preloader js-product-list-preloader"></div>
    </div>


    <div class="product-list__bottom js-product-list-bottom-ajax-replace">
        <?=$arResult['NAV_STRING']?>
    </div>
</div>
