<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

    <main>
        <div class="main">
            <div class="wrapper wrapper_padding">
                <div class="main-slider swiper-container js-main-slider">
                    <div class="main-slider__wrapper swiper-wrapper">
                        <div class="main-slider__slide swiper-slide">
                            <div class="main-slider__content swiper-lazy" data-background="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/main-slider_1.jpg">
                                <div class="swiper-lazy-preloader"></div>
                                <span class="main-slider__title">Диваны <br class="hidden-lg hidden-sm hidden-xs">
                                    Askona<br>
                                    с весенней скидкой
                                </span>
                                <span class="main-slider__subtitle">Выбор из 128 наименований</span>
                                <div class="main-slider__about">
                                    <a class="btn btn_green btn_fw btn_large" href="">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider__slide swiper-slide">
                            <div class="main-slider__content swiper-lazy" data-background="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/main-slider_2.jpg">
                                <div class="swiper-lazy-preloader"></div>
                                <span class="main-slider__title">Акция на кабинет<br
                                            class="hidden-lg hidden-sm hidden-xs">
                                    <br>для руководителя
                                </span>
                                <span class="main-slider__subtitle">Серия из 24-х позиций мебели</span>
                                <div class="main-slider__about">
                                    <a class="btn btn_green btn_fw" href="">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider__nav js-main-slider-nav"></div>
                    <button class="main-slider__btn main-slider__btn_prev js-main-slider-btn-prev" type="button">
                        <svg class="main-slider__btn-icon" height="0.6875rem" viewBox="0 0 7 12" width="0.4375rem"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.682 12.008l1.325-1.4L2.643 6l4.364-4.608-1.325-1.4L-.008 6z"></path>
                        </svg>
                    </button>
                    <button class="main-slider__btn main-slider__btn_next js-main-slider-btn-next" type="button">
                        <svg class="main-slider__btn-icon" height="0.6875rem" viewBox="0 0 7 12" width="0.4375rem"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12.07L.585 10.657 5.242 6 .585 1.343 2-.071l6.07 6.07z"></path>
                        </svg>
                    </button>
                </div>
                <a href="" class="banner-link" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/html/build/img/static/banner_1.jpg')">
                    Бесплатная сборка мебели<br>
                    по условиям акции
                </a>
            </div>
            <div class="gray-bg">
                <div class="wrapper wrapper_padding wrapper_xs-full">
                    <div class="slider-universal js-slider-universal">
                        <div class="slider-universal__text">
                            <span class="slider-universal__title">Специальные предложения</span>
                            <span class="slider-universal__subtitle">Акции, новинки, выбор покупателей</span>
                        </div>
                        <div class="slider-universal__nav">
                            <button type="button" class="slider-universal__nav-prev js-slider-universal-nav-prev">
                                <svg class="slider-universal__nav-icon" height="0.6875rem" viewBox="0 0 7 12"
                                     width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.682 12.008l1.325-1.4L2.643 6l4.364-4.608-1.325-1.4L-.008 6z"></path>
                                </svg>
                            </button>
                            <a class="slider-universal__nav-content" href="">
                                <span class="slider-universal__nav-text">все спецпредложения</span>
                                <span class="slider-universal__nav-count">47</span>
                            </a>
                            <button type="button" class="slider-universal__nav-next js-slider-universal-nav-next">
                                <svg class="slider-universal__nav-icon" height="0.6875rem" viewBox="0 0 7 12"
                                     width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 12.07L.585 10.657 5.242 6 .585 1.343 2-.071l6.07 6.07z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="slider-universal__slider swiper-container js-slider-universal-container">
                            <div class="slider-universal__slider-wrapper swiper-wrapper">
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="slider-universal__slide swiper-slide">
                                    <div class="product-item js-product-item">
                                        <div class="product-item__top">
                                            <div class="product-item__img-wrapper">
                                                <div class="product-item__slider js-product-item__slider swiper-container">
                                                    <a href="" class="swiper-wrapper">
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_1.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_2.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_3.jpg" alt=""
                                                                 class="product-item__img swiper-lazy product-item__img_cover">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_4.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_5.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_6.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                        <div class="product-item__slide swiper-slide">
                                                            <img src="" data-src="<?=SITE_TEMPLATE_PATH?>/html/build/img/test/divan/divan_7.jpg" alt=""
                                                                 class="product-item__img swiper-lazy">
                                                            <div class="swiper-lazy-preloader preloader"></div>
                                                        </div>
                                                    </a>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_prev js-product-item-nav-btn-prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="product-item__nav-btn product-item__nav-btn_next js-product-item-nav-btn-next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                             width="7">
                                                            <path fill="#999"
                                                                  d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="product-item__top-bar">
                                                <div class="product-item__markers">
                                                    <div class="marker marker__blue js-std-tooltip"
                                                         title="Из новой коллекции">
                                                        новинка
                                                    </div>
                                                    <div class="marker marker__orange js-std-tooltip"
                                                         title="Сезонная скидка">-10
                                                        %
                                                    </div>
                                                    <div class="marker marker__yellow js-std-tooltip"
                                                         title="Бесплатная сборка по акции">сборка
                                                    </div>
                                                    <div class="marker marker__green js-std-tooltip"
                                                         title="Весеняя распродажа">акция
                                                    </div>
                                                </div>
                                                <div class="product-item__btns">
                                                    <button type="button"
                                                            class="product-add-btn product-add-btn_added js-std-tooltip"
                                                            title="Добавить в избранное">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="18" height="18"
                                                             viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path class="product-add-btn__icon" fill="#999"
                                                                  d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="product-add-btn js-std-tooltip"
                                                            title="Добавить к сравнению">
                                                        <svg class="product-add-btn__icon"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             height="18"
                                                             viewBox="0 0 24 24" width="18">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path class="product-add-btn__icon"
                                                                  d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z"
                                                                  fill="#999"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom">
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

                                            <div class="product-item__vendor-code">
                                                <span class="vendor-code">2050-50365</span>
                                            </div>

                                            <a href="" class="product-item__name">Диван дизайнерский 3-х местный
                                                Vetton
                                            </a>

                                            <div class="product-item__prices">
                                                <span class="product-item__old-price">24 990</span>
                                                <span class="product-item__price">19 990
                                                    <span class="product-item__currency">₽</span>
                                                    <span class="product-item__unit">/шт.</span>
                                                </span>
                                            </div>

                                            <div class="product-item__main-btns">
                                                <div class="product-item__quantity">
                                                    <div class="quantity">
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
                                                                 width="10">
                                                                <path fill="#999"
                                                                      d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                                            </svg>
                                                        </button>
                                                        <div class="quantity__change-count" contenteditable="true">1
                                                        </div>
                                                        <button type="button" class="quantity__btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512"
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
                                            <div class="product-item__options">
                                                <a href="" class="btn btn_green btn_small">Выбрать опции</a>
                                            </div>

                                            <div class="product-item__sizes">
                                                <div class="size">
                                                    <span class="size__item">
                                                        <span class="size__name">Ширина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">3 500 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Высота</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">1 200 мм</span>
                                                    </span>
                                                    <span class="size__item">
                                                        <span class="size__name">Глубина</span>
                                                        <span class="size__separator"></span>
                                                        <span class="size__value">900 мм</span>
                                                    </span>
                                                </div>
                                            </div>

                                            <span class="product-item__notice">Дополнительное примечание к товару</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
