<!DOCTYPE html>

<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addString('<meta charset="UTF-8">');
$asset->addString('<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">');
$asset->addString('<meta content="#ffffff" name="msapplication-TileColor">');
$asset->addString('<meta content="#ffffff" name="theme-color">');

$asset->addCss(SITE_TEMPLATE_PATH.'/html/build/css/style.css');

$asset->addJs(SITE_TEMPLATE_PATH.'/html/build/js/scripts.js');

$page = $APPLICATION->GetCurPage();
?>

<html lang="ru">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>

    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/android-icon-192x192.png" rel="icon" sizes="192x192"
          type="image/png">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/manifest.json" rel="manifest">
    <meta content="<?= SITE_TEMPLATE_PATH ?>/html/build/img/favicon/ms-icon-144x144.png" name="msapplication-TileImage">

    <title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<header>
    <div class="top-bar">
        <div class="wrapper">
            <div class="top-bar__inner">
                <div class="top-bar__item hidden-lg hidden-md">
                    <button type="button" class="top-bar__menu-hamburger js-mobile-menu-btn">
                        <span class="hamburger hamburger_header hamburger--collapse">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                        <span class="top-bar__menu-hamburger-text hidden-xs">Меню</span>
                    </button>
                </div>
                <div class="top-bar__item hidden-sm hidden-xs">
                    <a href="/catalog/" type="button" class="top-bar-btn top-bar-btn_dropdown">
                        <span class="top-bar-btn__text">Каталог</span>
                    </a>
                </div>
                <div class="top-bar__item hidden-sm hidden-xs">
                    <div class="top-bar-dropdown">
                        <button type="button" class="top-bar-btn top-bar-btn_dropdown">
                            <span class="top-bar-btn__text">О компании</span>
                            <svg class="top-bar-btn__dropdown-icon" height="3" viewBox="0 0 13 3" width="13"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 0a1.5 1.5 0 110 2.998A1.5 1.5 0 011.5 0zm4.999 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm5 0a1.5 1.5 0 110 2.999 1.5 1.5 0 010-3z"
                                      fill="#fff" opacity=".5"/>
                            </svg>
                        </button>
                        <div class="top-bar-dropdown__list">
                            <a href="" class="top-bar-dropdown__item">О нас</a>
                            <a href="" class="top-bar-dropdown__item">Новости</a>
                            <a href="" class="top-bar-dropdown__item">Статьи</a>
                        </div>
                    </div>
                </div>
                <div class="top-bar__item hidden-sm hidden-xs">
                    <div class="top-bar-dropdown">
                        <button type="button" class="top-bar-btn top-bar-btn_dropdown">
                            <span class="top-bar-btn__text">Информация покупателям</span>
                            <svg class="top-bar-btn__dropdown-icon" height="3" viewBox="0 0 13 3" width="13"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 0a1.5 1.5 0 110 2.998A1.5 1.5 0 011.5 0zm4.999 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm5 0a1.5 1.5 0 110 2.999 1.5 1.5 0 010-3z"
                                      fill="#fff" opacity=".5"/>
                            </svg>
                        </button>
                        <div class="top-bar-dropdown__list">
                            <a href="" class="top-bar-dropdown__item">Оплата</a>
                            <a href="" class="top-bar-dropdown__item">Акции</a>
                            <a href="" class="top-bar-dropdown__item">Дисконтная система</a>
                            <a href="" class="top-bar-dropdown__item">Покупка в кредит</a>
                            <a href="" class="top-bar-dropdown__item">Доставка</a>
                            <a href="" class="top-bar-dropdown__item">Сертификаты</a>
                            <a href="" class="top-bar-dropdown__item">Наши партнеры</a>
                            <a href="" class="top-bar-dropdown__item">Стать партнером</a>
                            <a href="" class="top-bar-dropdown__item">Поставщикам</a>
                        </div>
                    </div>
                </div>
                <div class="top-bar__item hidden-sm hidden-xs">
                    <a href="" class="top-bar-btn">
                        <svg class="top-bar-btn__icon" xmlns="http://www.w3.org/2000/svg"
                             height="18" viewBox="0 0 24 24" width="18">
                            <path d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z"
                                  fill-rule="evenodd" fill="#ffe65e"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                        <span class="top-bar-btn__text top-bar-btn__text_yellow">Оптовым
                            покупателям
                        </span>
                    </a>
                </div>
                <div class="top-bar__item hidden-lg hidden-md">
                    <button type="button" class="top-bar-btn">
                        <svg class="top-bar-btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                             width="12">
                            <path fill="#fff"
                                  d="M192 0C85.903 0 0 86.014 0 192c0 71.117 23.991 93.341 151.271 297.424 18.785 30.119 62.694 30.083 81.457 0C360.075 285.234 384 263.103 384 192 384 85.903 297.986 0 192 0zm0 464C64.576 259.686 48 246.788 48 192c0-79.529 64.471-144 144-144s144 64.471 144 144c0 54.553-15.166 65.425-144 272z"/>
                        </svg>
                        <span class="top-bar-btn__text hidden-xs">Выберите город</span>
                        <svg class="top-bar-btn__dropdown-icon top-bar-btn__dropdown-icon_city" height="3"
                             viewBox="0 0 13 3" width="13"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 0a1.5 1.5 0 110 2.998A1.5 1.5 0 011.5 0zm4.999 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm5 0a1.5 1.5 0 110 2.999 1.5 1.5 0 010-3z"
                                  fill="#fff" opacity=".5"/>
                        </svg>
                    </button>
                </div>
                <div class="top-bar__item">
                    <button type="button" class="top-bar-btn">
                        <svg class="top-bar-btn__icon top-bar-btn__icon__md" xmlns="http://www.w3.org/2000/svg"
                             height="18" viewBox="0 0 24 24" width="18">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"
                                  fill="#fff"/>
                        </svg>
                        <span class="top-bar-btn__text hidden-md hidden-xs">Избранное</span>
                        <span class="top-bar-btn__counter">3</span>
                    </button>
                </div>
                <div class="top-bar__item">
                    <button type="button" class="top-bar-btn">
                        <svg class="top-bar-btn__icon top-bar-btn__icon__md" xmlns="http://www.w3.org/2000/svg"
                             height="18" viewBox="0 0 24 24" width="18">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 20h4V4h-4v16zm-6 0h4v-8H4v8zM16 9v11h4V9h-4z" fill="#fff"/>
                        </svg>
                        <span class="top-bar-btn__text hidden-md hidden-xs">Сравнение</span>
                        <span class="top-bar-btn__counter">4</span>
                    </button>
                </div>
                <div class="top-bar__item">
                    <div class="top-bar-dropdown">
                        <button type="button" class="top-bar-btn top-bar-btn_dropdown">
                            <svg class="top-bar-btn__icon top-bar-btn__icon__md" xmlns="http://www.w3.org/2000/svg"
                                 height="20" viewBox="0 0 24 24" width="20">
                                <path
                                        d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"
                                        fill="#fff"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            <span class="top-bar-btn__text hidden-md hidden-xs">Личный кабинет</span>
                            <svg class="top-bar-btn__dropdown-icon" height="3" viewBox="0 0 13 3" width="13"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 0a1.5 1.5 0 110 2.998A1.5 1.5 0 011.5 0zm4.999 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm5 0a1.5 1.5 0 110 2.999 1.5 1.5 0 010-3z"
                                      fill="#fff" opacity=".5"/>
                            </svg>
                        </button>
                        <div class="top-bar-dropdown__list">
                            <a href="" class="top-bar-dropdown__item">Войти</a>
                            <a href="" class="top-bar-dropdown__item">Зарегистрироваться</a>
                            <a href="" class="top-bar-dropdown__item">Забыли пароль?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu js-mobile-menu hidden-lg hidden-md">
            <div class="wrapper wrapper_padding">
                <div class="mobile-menu__inner">
                    <div class="mobile-menu__col">
                        <ul class="mobile-menu-list">
                            <li class="mobile-menu-list__item">
                                <button class="mobile-menu-list__btn js-mobile-menu-dropdown-btn">
                                    <span class="mobile-menu-list__btn-text">О компании</span>
                                    <svg class="mobile-menu-list__icon js-mobile-menu-list-dropdown-icon"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 320 512" width="12">
                                        <path fill="#fff"
                                              d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/>
                                    </svg>
                                </button>
                                <ul class="mobile-menu-list__dropdown js-mobile-menu-dropdown" style="display: none">
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">О нас
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Новости
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Статьи
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mobile-menu-list__item">
                                <button class="mobile-menu-list__btn js-mobile-menu-dropdown-btn">
                                    <span class="mobile-menu-list__btn-text">Информация
                                        покупателям
                                    </span>
                                    <svg class="mobile-menu-list__icon js-mobile-menu-list-dropdown-icon"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 320 512" width="12">
                                        <path fill="#fff"
                                              d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/>
                                    </svg>
                                </button>
                                <ul class="mobile-menu-list__dropdown js-mobile-menu-dropdown" style="display: none">
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Оптовым покупателям
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Правила эксплуатации
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Гарантия
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Обмен и возврат
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Правила и условия
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Дисконтная система
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Сертификаты
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mobile-menu-list__item">
                                <button class="mobile-menu-list__btn js-mobile-menu-dropdown-btn">
                                    <span class="mobile-menu-list__btn-text">Интернет-магазин</span>
                                    <svg class="mobile-menu-list__icon js-mobile-menu-list-dropdown-icon"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 320 512" width="12">
                                        <path fill="#fff"
                                              d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/>
                                    </svg>
                                </button>
                                <ul class="mobile-menu-list__dropdown js-mobile-menu-dropdown" style="display: none">
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Как заказать
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Оплата
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Доставка
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Сборка
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Полезные советы
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Покупка в кредит
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Подарочные сертификаты
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Акции
                                        </a>
                                    </li>
                                    <li class="mobile-menu-list__dropdown-item">
                                        <a href=""
                                           class="mobile-menu-list__link">Дизайн-интерьеров
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="" class="mobile-link mobile-link_yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="20"
                                 class="mobile-link__icon">
                                <path class="mobile-link__icon-path" fill="#fff"
                                      d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z"
                                      fill-rule="evenodd"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            <span class="mobile-link__text">Оптовым покупателям</span>
                        </a>
                        <div class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                 width="30">
                                <path fill="#fff"
                                      d="M352 320h-32c-17.66 0-32 14.36-32 32v32c0 17.64 14.34 32 32 32h32c17.66 0 32-14.36 32-32v-32c0-17.64-14.34-32-32-32zm0 64h-32v-32h32v32zm0-192h-32c-17.66 0-32 14.36-32 32v32c0 17.64 14.34 32 32 32h32c17.66 0 32-14.36 32-32v-32c0-17.64-14.34-32-32-32zm0 64h-32v-32h32v32zm128 64h-32c-17.66 0-32 14.36-32 32v32c0 17.64 14.34 32 32 32h32c17.66 0 32-14.36 32-32v-32c0-17.64-14.34-32-32-32zm0 64h-32v-32h32v32zm0-192h-32c-17.66 0-32 14.36-32 32v32c0 17.64 14.34 32 32 32h32c17.66 0 32-14.36 32-32v-32c0-17.64-14.34-32-32-32zm0 64h-32v-32h32v32zm32-224H237.06C230.45 13.4 212.87 0 192 0h-64c-20.87 0-38.45 13.4-45.06 32H64C28.65 32 0 60.65 0 96v352c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96c0-35.35-28.65-64-64-64zM320 64h160v64H320V64zM112 48c0-8.82 7.18-16 16-16h64c8.82 0 16 7.18 16 16v336c0 8.82-7.18 16-16 16h-64c-8.82 0-16-7.18-16-16V48zm432 400c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V96c0-17.64 14.36-32 32-32h16v320c0 26.51 21.49 48 48 48h64c26.51 0 48-21.49 48-48V64h48v64c0 17.64 14.34 32 32 32h160c17.66 0 32-14.36 32-32V64c17.64 0 32 14.36 32 32v352z"/>
                            </svg>
                            <div class="header-btn__text">
                                <a href="" class="header-btn__title header-btn__title_white">Заказать звонок</a>
                                <a href="tel:8-800-511-38-36" class="header-btn__phone header-btn__phone_white">
                                    <span class="header-btn__phone_bold">8 800</span>
                                    511 3836
                                </a>
                            </div>
                        </div>
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon" viewBox="0 0 512 512" width="30"
                                 height="30"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M439.277 72.723C392.38 25.824 330.04 0 263.711 0h-.023c-32.805.004-64.774 6.355-95.012 18.883-30.242 12.527-57.336 30.64-80.535 53.84-46.895 46.894-72.72 109.246-72.72 175.566 0 39.55 9.544 78.856 27.626 113.875L1.313 481.391c-2.942 8.41-.86 17.55 5.445 23.851C11.168 509.656 16.973 512 22.94 512c2.559 0 5.145-.43 7.668-1.313l119.227-41.73c35.02 18.082 74.324 27.625 113.875 27.625 66.32 0 128.668-25.828 175.566-72.723C486.172 376.965 512 314.613 512 248.293c0-66.324-25.824-128.676-72.723-175.57zm-21.234 329.902c-41.223 41.227-96.035 63.926-154.332 63.926-35.664 0-71.094-8.82-102.461-25.516-5.687-3.023-12.41-3.543-18.445-1.43l-108.32 37.91 37.913-108.32c2.114-6.043 1.59-12.765-1.433-18.449-16.692-31.36-25.516-66.789-25.516-102.457 0-58.297 22.703-113.11 63.926-154.332 41.219-41.219 96.023-63.922 154.316-63.93h.02c58.3 0 113.11 22.703 154.332 63.93 41.227 41.223 63.93 96.031 63.93 154.332 0 58.3-22.703 113.113-63.93 154.336zm0 0"
                                      fill="#fff"/>
                                <path d="M355.984 270.469c-11.421-11.422-30.007-11.422-41.43 0l-12.491 12.492c-31.02-16.902-56.122-42.004-73.028-73.024l12.492-12.492c11.426-11.422 11.426-30.007 0-41.43l-33.664-33.663c-11.422-11.422-30.008-11.422-41.43 0l-26.93 26.93c-15.425 15.425-16.194 41.945-2.167 74.675 12.18 28.418 34.469 59.652 62.762 87.945 28.293 28.293 59.527 50.582 87.945 62.762 15.55 6.664 29.695 9.988 41.918 9.988 13.504 0 24.66-4.058 32.758-12.156l26.93-26.934v.004c5.535-5.535 8.581-12.89 8.581-20.714 0-7.829-3.046-15.184-8.582-20.715zm-14.5 80.793c-4.402 4.402-17.941 5.945-41.609-4.196-24.992-10.71-52.887-30.742-78.543-56.398s-45.684-53.547-56.394-78.54c-10.145-23.667-8.602-37.21-4.2-41.612l26.414-26.414 32.625 32.628-15.636 15.641c-7.07 7.07-8.778 17.793-4.243 26.684 20.559 40.312 52.735 72.488 93.047 93.047 8.895 4.535 19.618 2.832 26.688-4.243l15.637-15.636 32.628 32.629zm0 0"
                                      fill="#fff"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">Написать в WhatsApp</span>
                                <span class="header-btn__phone header-btn__phone_white">
                                    <span class="header-btn__phone_bold">8 988</span>
                                    444 22 33
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="mobile-menu__col">
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon header-btn__icon_mobile" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512" width="30">
                                <path d="M464 64h-48V48c0-26.51-21.49-48-48-48H48C21.49 0 0 21.49 0 48v64c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48V96h48c8.81 0 16 7.17 16 16v96c0 8.83-7.19 16-16 16H256c-26.47 0-48 21.53-48 48v48h-16c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32h-16v-48c0-8.83 7.19-16 16-16h208c26.47 0 48-21.53 48-48v-96c0-26.47-21.53-48-48-48zm-80 0v48c0 8.82-7.18 16-16 16H48c-8.82 0-16-7.18-16-16V48c0-8.82 7.18-16 16-16h320c8.82 0 16 7.18 16 16v16zM256 480h-64V352h64v128z"
                                      fill="#999"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">Выгодные условия</span>
                                <span class="header-btn__subtitle header-btn__subtitle_white">Дизайнерам</span>
                            </div>
                        </a>
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon header-btn__icon_mobile" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 640 512" width="30">
                                <path d="M416 32h224V0H416c-35.3 0-64 28.7-64 64v307.9L5.9 480.8c-4.3 1.2-6.8 5.6-5.6 9.8L4.5 506c1.2 4.3 5.6 6.8 9.8 5.6L367.2 400H416c0 61.9 50.1 112 112 112s112-50.1 112-112-50.1-112-112-112c-50.6 0-92.8 33.9-106.7 80H384V64c0-17.6 14.4-32 32-32zm112 288c44.1 0 80 35.9 80 80s-35.9 80-80 80-80-35.9-80-80 35.9-80 80-80zM3 325.7l21.4 68.8c5.3 16.8 23.2 26.2 40 21h.1L320 336.1v-33.5L55 385l-21.4-68.8c-4-12.8 3.2-26.1 15.8-30 12.6-3.9 26.1 3.2 30 15.8l11.9 38.2 213.9-66.5-11.9-38.2c-3.9-12.6 3.1-26.1 15.8-30.1 3.7-1.1 7.3-1.3 10.8-.7v-45.3l-2.2-7c-13.1-42.1-58-65.7-100-52.7h-.1L64.9 147.3C22.7 160.4-.9 205.2 12.3 247.4l6.4 20.6C1.6 283.8-3.1 306.1 3 325.7zm71.4-147.8l152.8-47.5h.1c25.2-7.8 52.1 6.4 60 31.6l5 16.1c-24.7 11.8-37.8 40.1-29.5 67l2.4 7.6-152.8 47.5-2.4-7.6c-8.3-26.9-35.2-42.7-62.2-38.5l-5-16.1c-7.9-25.4 6.3-52.2 31.6-60.1z"
                                      fill="#999"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">По всей стране</span>
                                <span class="header-btn__subtitle header-btn__subtitle_white">Доставка</span>
                            </div>
                        </a>
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon header-btn__icon_mobile" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 640 512"
                                 width="30">
                                <path fill="#999"
                                      d="M425.23 406.49A32.06 32.06 0 0 0 448 416h64a32 32 0 0 0 32-32v-64a32 32 0 0 0-9.5-22.76L246.68 12.07a41.15 41.15 0 0 0-58.24 0l-48.38 48.4A41.48 41.48 0 0 0 128 89.89 40.68 40.68 0 0 0 140.34 119zM289.46 100L512 320v64h-64L228.1 161.4l61.36-61.4zM162.69 83.09l48.39-48.4A9.21 9.21 0 0 1 217.6 32a9 9 0 0 1 6.45 2.69l44.53 44.54-61.36 61.38-44.53-44.54a9.18 9.18 0 0 1 0-12.98zM224 408a8 8 0 0 0 8 8h157.61l-31.71-32H232a8 8 0 0 0-8 8zm8-88h62.49l-31.71-32H232a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm376-192H409.15l32.3 32H608v320H32V160h104l-18-18.12A73.25 73.25 0 0 1 107.13 128H32a32 32 0 0 0-32 32v320a32 32 0 0 0 32 32h576a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32zM136 424h16a8 8 0 0 0 8-8v-16.12c23.62-.63 42.67-20.54 42.67-45.07 0-20-13-37.81-31.58-43.39l-45-13.5c-5.16-1.54-8.77-6.78-8.77-12.73 0-7.27 5.29-13.19 11.79-13.19h28.11a24 24 0 0 1 12.82 3.72 8.21 8.21 0 0 0 10.13-.73l11.75-11.21a8 8 0 0 0-.57-12.14A57.15 57.15 0 0 0 160 240.29V224a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16.12c-23.62.63-42.67 20.55-42.67 45.07 0 20 13 37.81 31.58 43.39l45 13.5c5.16 1.54 8.77 6.78 8.77 12.73 0 7.27-5.29 13.19-11.79 13.19h-28.12a24.08 24.08 0 0 1-12.77-3.72 8.21 8.21 0 0 0-10.13.73l-11.8 11.21a8 8 0 0 0 .57 12.14A57.23 57.23 0 0 0 128 399.71V416a8 8 0 0 0 8 8z"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">Покупка</span>
                                <span class="header-btn__subtitle header-btn__subtitle_white">В кредит</span>
                            </div>
                        </a>
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon header-btn__icon_mobile" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512"
                                 width="30">
                                <path fill="#999"
                                      d="M448 193.9v-33.7c0-53.1-43-96.2-96-96.2H160c-53 0-96 43.1-96 96.2v33.7c-36.5 7.5-64 39.8-64 78.6 0 25.1 12.1 48.8 32 63.8v79.6c0 17.7 14.3 32.1 32 32.1h64c17.3 0 31.3-14.7 31.8-32h192.4c.5 17.3 14.5 32 31.8 32h64c17.7 0 32-14.4 32-32.1v-79.6c19.9-15.1 32-38.7 32-63.8 0-38.7-27.5-71.1-64-78.6zm-320 222H64v-97.4c-17.1-10-32-21.1-32-46 0-26.5 21.5-48.1 48-48.1h32c8.8 0 16 7.2 16 16v175.5zM352 384H160v-95.5h192V384zm0-143.6V256H160v-15.6c0-26.5-21.5-48.1-48-48.1H96v-32.1c0-35.4 28.7-64.1 64-64.1h192c35.3 0 64 28.8 64 64.1v32.1h-16c-26.5 0-48 21.6-48 48.1zm96 78.1v97.4h-64V240.4c0-8.8 7.2-16 16-16h32c26.5 0 48 21.6 48 48.1 0 23.9-13.9 35.4-32 46z"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">Мебель</span>
                                <span class="header-btn__subtitle header-btn__subtitle_white">Под заказ</span>
                            </div>
                        </a>
                        <a href="" class="header-btn header-btn_mobile-menu">
                            <svg class="header-btn__icon header-btn__icon_mobile" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512"
                                 width="30">
                                <path fill="#999"
                                      d="M96 432c8.84 0 16-7.16 16-16s-7.16-16-16-16-16 7.16-16 16 7.16 16 16 16zm384-112H327.77l107.65-107.65c12.5-12.5 12.5-32.76 0-45.26l-90.52-90.5c-6.25-6.25-14.44-9.37-22.63-9.37s-16.38 3.12-22.63 9.37L192 184.23V32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v384c0 53.02 42.98 96 96 96h384c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32zm-320 96c0 35.29-28.71 64-64 64s-64-28.71-64-64V288h128v128zm0-160H32v-96h128v96zm0-128H32V32h128v96zm32 101.47L322.24 99.22h.03l90.51 90.51L192 410.51V229.47zM480 480H167.76l128-128H480v128z"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_white">Дизайн</span>
                                <span class="header-btn__subtitle header-btn__subtitle_white">Интерьеров</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="wrapper wrapper_padding">
            <div class="header__inner">
                <a href="/" class="logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/html/build/img/svg/logo.svg" alt="" class="logo__img" width="60px" height="60px">
                    <div class="logo__text">
                        <span class="logo__brand">Фабрика Уюта</span>
                        <span class="logo__description">Интернет-магазин мебели</span>
                    </div>
                </a>
                <div class="header__content">
                    <div class="header__btns hidden-xs">
                        <div class="header-btn">
                            <div class="header-btn__text">
                                <a href="" class="header-btn__title header-btn__title_dark">Заказать звонок</a>
                                <a href="tel:8-800-511-38-36" class="header-btn__phone header-btn__phone_dark">
                                    <span class="header-btn__phone_bold">8 800</span>
                                    511 3836
                                </a>
                            </div>
                        </div>
                        <a href="" class="header-btn">
                            <svg class="header-btn__icon hidden-md hidden-sm" viewBox="0 0 512 512" width="30"
                                 height="30"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M439.277 72.723C392.38 25.824 330.04 0 263.711 0h-.023c-32.805.004-64.774 6.355-95.012 18.883-30.242 12.527-57.336 30.64-80.535 53.84-46.895 46.894-72.72 109.246-72.72 175.566 0 39.55 9.544 78.856 27.626 113.875L1.313 481.391c-2.942 8.41-.86 17.55 5.445 23.851C11.168 509.656 16.973 512 22.94 512c2.559 0 5.145-.43 7.668-1.313l119.227-41.73c35.02 18.082 74.324 27.625 113.875 27.625 66.32 0 128.668-25.828 175.566-72.723C486.172 376.965 512 314.613 512 248.293c0-66.324-25.824-128.676-72.723-175.57zm-21.234 329.902c-41.223 41.227-96.035 63.926-154.332 63.926-35.664 0-71.094-8.82-102.461-25.516-5.687-3.023-12.41-3.543-18.445-1.43l-108.32 37.91 37.913-108.32c2.114-6.043 1.59-12.765-1.433-18.449-16.692-31.36-25.516-66.789-25.516-102.457 0-58.297 22.703-113.11 63.926-154.332 41.219-41.219 96.023-63.922 154.316-63.93h.02c58.3 0 113.11 22.703 154.332 63.93 41.227 41.223 63.93 96.031 63.93 154.332 0 58.3-22.703 113.113-63.93 154.336zm0 0"
                                      fill="#333"/>
                                <path d="M355.984 270.469c-11.421-11.422-30.007-11.422-41.43 0l-12.491 12.492c-31.02-16.902-56.122-42.004-73.028-73.024l12.492-12.492c11.426-11.422 11.426-30.007 0-41.43l-33.664-33.663c-11.422-11.422-30.008-11.422-41.43 0l-26.93 26.93c-15.425 15.425-16.194 41.945-2.167 74.675 12.18 28.418 34.469 59.652 62.762 87.945 28.293 28.293 59.527 50.582 87.945 62.762 15.55 6.664 29.695 9.988 41.918 9.988 13.504 0 24.66-4.058 32.758-12.156l26.93-26.934v.004c5.535-5.535 8.581-12.89 8.581-20.714 0-7.829-3.046-15.184-8.582-20.715zm-14.5 80.793c-4.402 4.402-17.941 5.945-41.609-4.196-24.992-10.71-52.887-30.742-78.543-56.398s-45.684-53.547-56.394-78.54c-10.145-23.667-8.602-37.21-4.2-41.612l26.414-26.414 32.625 32.628-15.636 15.641c-7.07 7.07-8.778 17.793-4.243 26.684 20.559 40.312 52.735 72.488 93.047 93.047 8.895 4.535 19.618 2.832 26.688-4.243l15.637-15.636 32.628 32.629zm0 0"
                                      fill="#333"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_dark">Написать в WhatsApp</span>
                                <span class="header-btn__phone header-btn__phone_dark">
                                    <span class="header-btn__phone_bold">8 988</span>
                                    444 22 33
                                </span>
                            </div>
                        </a>
                        <a href="" class="header-btn hidden-sm">
                            <svg class="header-btn__icon hidden-md" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512" width="30">
                                <path d="M464 64h-48V48c0-26.51-21.49-48-48-48H48C21.49 0 0 21.49 0 48v64c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48V96h48c8.81 0 16 7.17 16 16v96c0 8.83-7.19 16-16 16H256c-26.47 0-48 21.53-48 48v48h-16c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32h-16v-48c0-8.83 7.19-16 16-16h208c26.47 0 48-21.53 48-48v-96c0-26.47-21.53-48-48-48zm-80 0v48c0 8.82-7.18 16-16 16H48c-8.82 0-16-7.18-16-16V48c0-8.82 7.18-16 16-16h320c8.82 0 16 7.18 16 16v16zM256 480h-64V352h64v128z"
                                      fill="#333"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_dark">Выгодные условия</span>
                                <span class="header-btn__subtitle header-btn__subtitle_dark">Дизайнерам</span>
                            </div>
                        </a>
                        <a href="" class="header-btn hidden-sm">
                            <svg class="header-btn__icon hidden-md" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 640 512" width="35">
                                <path d="M416 32h224V0H416c-35.3 0-64 28.7-64 64v307.9L5.9 480.8c-4.3 1.2-6.8 5.6-5.6 9.8L4.5 506c1.2 4.3 5.6 6.8 9.8 5.6L367.2 400H416c0 61.9 50.1 112 112 112s112-50.1 112-112-50.1-112-112-112c-50.6 0-92.8 33.9-106.7 80H384V64c0-17.6 14.4-32 32-32zm112 288c44.1 0 80 35.9 80 80s-35.9 80-80 80-80-35.9-80-80 35.9-80 80-80zM3 325.7l21.4 68.8c5.3 16.8 23.2 26.2 40 21h.1L320 336.1v-33.5L55 385l-21.4-68.8c-4-12.8 3.2-26.1 15.8-30 12.6-3.9 26.1 3.2 30 15.8l11.9 38.2 213.9-66.5-11.9-38.2c-3.9-12.6 3.1-26.1 15.8-30.1 3.7-1.1 7.3-1.3 10.8-.7v-45.3l-2.2-7c-13.1-42.1-58-65.7-100-52.7h-.1L64.9 147.3C22.7 160.4-.9 205.2 12.3 247.4l6.4 20.6C1.6 283.8-3.1 306.1 3 325.7zm71.4-147.8l152.8-47.5h.1c25.2-7.8 52.1 6.4 60 31.6l5 16.1c-24.7 11.8-37.8 40.1-29.5 67l2.4 7.6-152.8 47.5-2.4-7.6c-8.3-26.9-35.2-42.7-62.2-38.5l-5-16.1c-7.9-25.4 6.3-52.2 31.6-60.1z"
                                      fill="#333"/>
                            </svg>
                            <div class="header-btn__text">
                                <span class="header-btn__title header-btn__title_dark">По всей стране</span>
                                <span class="header-btn__subtitle header-btn__subtitle_dark">Доставка</span>
                            </div>
                        </a>
                    </div>
                    <a href="" class="cart-btn">
                        <div class="cart-btn__icon-wrapper" data-cart-count="3">
                            <svg class="cart-btn__icon" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 511.997 511.997" width="25" height="25">
                                <path d="M405.387 362.612c-35.202 0-63.84 28.639-63.84 63.84s28.639 63.84 63.84 63.84 63.84-28.639 63.84-63.84-28.639-63.84-63.84-63.84zm0 89.376c-14.083 0-25.536-11.453-25.536-25.536s11.453-25.536 25.536-25.536c14.083 0 25.536 11.453 25.536 25.536s-11.453 25.536-25.536 25.536zm102.54-336.113a19.128 19.128 0 00-15.079-7.348H118.22l-17.237-72.12a19.16 19.16 0 00-18.629-14.702H19.152C8.574 21.704 0 30.278 0 40.856s8.574 19.152 19.152 19.152h48.085l62.244 260.443a19.153 19.153 0 0018.629 14.702h298.135c8.804 0 16.477-6.001 18.59-14.543l46.604-188.329a19.185 19.185 0 00-3.512-16.406zM431.261 296.85H163.227l-35.853-150.019h341.003L431.261 296.85zm-257.615 65.762c-35.202 0-63.84 28.639-63.84 63.84s28.639 63.84 63.84 63.84 63.84-28.639 63.84-63.84-28.639-63.84-63.84-63.84zm0 89.376c-14.083 0-25.536-11.453-25.536-25.536s11.453-25.536 25.536-25.536 25.536 11.453 25.536 25.536-11.453 25.536-25.536 25.536z"
                                      fill="#333"/>
                            </svg>
                        </div>
                        <div class="cart-btn__text hidden-xs">
                            <span class="cart-btn__title">В корзине</span>
                            <span class="cart-btn__sum">57 359р</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="wrapper wrapper_padding wrapper_xs-full">
            <div class="main-menu__inner">
                <button type="button" class="catalog-btn js-catalog-btn" data-total-products="30 000+">
                    <span class="hamburger hamburger_catalog-btn hamburger--collapse">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                    <span class="catalog-btn__text">Каталог товаров</span>
                </button>
                <button type="button" class="mobile-search-btn hidden-lg hidden-md hidden-sm js-mobile-search-btn">
                    <svg class="mobile-search-btn__icon js-mobile-search-icon active" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512"
                         width="18">
                        <path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"
                              fill="#999"/>
                    </svg>
                    <svg class="mobile-search-btn__icon js-mobile-search-icon" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 320 512" width="14">
                        <path fill="#999"
                              d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"/>
                    </svg>
                </button>
                <form action="" method="post" class="header-search js-mobile-search">
                    <label class="header-search__label">
                        <svg class="header-search__label-icon hidden-xs" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512"
                             width="18">
                            <path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"
                                  fill="#999"/>
                        </svg>
                        <input type="search" placeholder="Поиск товаров и акций"
                               class="header-search__input js-header-search-input" minlength="2" required>
                    </label>
                    <button type="submit" class="header-search__submit">
                        <svg class="header-search__submit-icon" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 448 512"
                             width="14">
                            <path d="M295.515 115.716l-19.626 19.626c-4.753 4.753-4.675 12.484.173 17.14L356.78 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h344.78l-80.717 77.518c-4.849 4.656-4.927 12.387-.173 17.14l19.626 19.626c4.686 4.686 12.284 4.686 16.971 0l131.799-131.799c4.686-4.686 4.686-12.284 0-16.971L312.485 115.716c-4.686-4.686-12.284-4.686-16.97 0z"
                                  fill="#999"/>
                        </svg>
                    </button>
                    <div class="header-search__results"></div>
                </form>
                <div class="city-select hidden-sm hidden-xs">
                    <svg class="city-select__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="18">
                        <path d="M192 0C86.4 0 0 86.4 0 192c0 76.8 25.6 99.2 172.8 310.4 4.8 6.4 12 9.6 19.2 9.6s14.4-3.2 19.2-9.6C358.4 291.2 384 268.8 384 192 384 86.4 297.6 0 192 0zm.01 474c-19.67-28.17-37.09-52.85-52.49-74.69C42.64 261.97 32 245.11 32 192c0-88.22 71.78-160 160-160s160 71.78 160 160c0 53.11-10.64 69.97-107.52 207.31-15.52 22.01-33.09 46.92-52.47 74.69zm64.01-368.65c-12.5-12.47-32.75-12.47-45.25 0l-94.09 94.09c-2 2.02-3.44 4.51-4.16 7.27l-16 61.25c-1.44 5.5.12 11.34 4.16 15.36 3.03 3.05 7.12 4.69 11.31 4.69 1.34 0 2.72-.17 4.03-.52l61.25-16c2.75-.72 5.28-2.15 7.28-4.17l94.09-94.09c12.47-12.47 12.47-32.78 0-45.25l-22.62-22.63zM165 241.61l-30.62 8 8-30.61 91.03-91.03 22.62 22.62L165 241.61z"
                              fill="#999"/>
                    </svg>
                    <span class="city-select__name">Выберите ваш город</span>
                    <svg class="city-select__more-icon" height="0.1875em" viewBox="0 0 13 3" width="13"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 0a1.5 1.5 0 110 2.998A1.5 1.5 0 011.5 0zm4.999 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm5 0a1.5 1.5 0 110 2.999 1.5 1.5 0 010-3z"
                              fill="#999"></path>
                    </svg>
                </div>
                <a href="" class="main-menu-btn hidden-xs">
                    <svg class="main-menu-btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                         width="30">
                        <path
                                d="M485.51 384H528a16 16 0 0 0 16-16v-42.46a32 32 0 0 0-9.37-22.63L303.18 71.47l-71.7 71.7 231.39 231.45a32 32 0 0 0 22.64 9.38zM208.88 120.57l71.7-71.8L238.78 7a24.1 24.1 0 0 0-33.9 0L167 44.87a24 24 0 0 0 0 33.8zM136 424h16a8 8 0 0 0 8-8v-16.12c23.62-.63 42.67-20.54 42.67-45.07 0-20-13-37.81-31.58-43.39l-45-13.5c-5.16-1.54-8.77-6.78-8.77-12.73 0-7.27 5.3-13.19 11.8-13.19h28.11a24 24 0 0 1 12.82 3.72 9 9 0 0 0 4.75 1.4 7.72 7.72 0 0 0 5.38-2.13l11.75-11.21a8 8 0 0 0-.57-12.14A57.18 57.18 0 0 0 160 240.29V224a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v16.12c-23.62.63-42.67 20.55-42.67 45.07 0 20 13 37.81 31.58 43.39l45 13.5c5.16 1.54 8.77 6.78 8.77 12.73 0 7.27-5.3 13.19-11.8 13.19h-28.11a24.08 24.08 0 0 1-12.77-3.72 9 9 0 0 0-4.75-1.4 7.7 7.7 0 0 0-5.38 2.13l-11.8 11.21a8 8 0 0 0 .57 12.14A57.26 57.26 0 0 0 128 399.71V416a8 8 0 0 0 8 8zm120-120h91l-48-48h-43a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16zm-16 64a16 16 0 0 0 16 16h171l-48-48H256a16 16 0 0 0-16 16zm368-240H405l48 48h139v288H48V176h171.05l-10.2-10.2-22.6-22.6-15.2-15.2H32a32 32 0 0 0-32 32v320a32 32 0 0 0 32 32h576a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32z"
                                fill="#333"/>
                    </svg>
                    <div class="main-menu-btn__text">
                        Покупка<br>в кредит
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="header-catalog js-header-catalog">
        <div class="wrapper wrapper_padding wrapper_xs-full">
            <div class="header-catalog__wrapper">
                <? $sectionID = "";
                echo $sectionID;
                $APPLICATION->IncludeComponent(
                    "zo:HeaderCatalog.section.list",
                    "HeaderCatalog",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "sectionsFilter",
                        "IBLOCK_ID" => "14",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => $sectionID,
                        "ID_PARENT_SECTION" => "0",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("", ""),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "3",
                        "VIEW_MODE" => "LINE"
                    )
                );?>

            </div>
        </div>
    </div>

</header>

<main>
    <div class="wrapper wrapper_padding">
        <?if($page != "/"):?>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "-"
            ),
                false,
                Array('HIDE_ICONS' => 'Y')
            );?>
        <?endif;?>
    </div>
