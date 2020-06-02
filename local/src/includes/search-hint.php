<?php

use Local\Config;

?>

<div class="search-results js-search-results <?= !$products ? 'no-results' : '' ?>">
    <div class="search-results__inner">
        <div class="search-results__list">
            <? foreach ($products as $product): ?>
                <a href="<?= $product['DETAIL_PAGE_URL']; ?>" class="search-results__item">
                    <span class="search-results__img-wrapper">
                        <img src="<?= $product['PREVIEW_PICTURE'] ?>" alt="" class="search-results__img">
                    </span>
                    <span class="search-results__item-text">
                        <span class="search-results__item-vendor-code">
                            <span class="vendor-code js-search-results-vendor-code">
                                <?= $product['PROPERTY_' . Config::$properties['article'] . '_VALUE'] ?>
                            </span>
                        </span>
                        <span class="search-results__item-name js-search-results-item-name">
                            <?= $product['NAME']; ?>
                        </span>
                        <span class="search-results__item-price">
                            <span class="price"><?= number_format($product['CATALOG_PRICE_1'], 0, '.', ' '); ?>
                                <span class="price__currency">₽</span>
                                <span class="price__unit">/шт.</span>
                            </span>
    <!--                        <span class="old-price">24 990</span>-->
                        </span>
                    </span>
                </a>
            <? endforeach; ?>
        </div>
        <a href="/search/?q=<?= $_GET['query'] ?>" class="search-results__view-all">Все результаты</a>
    </div>
    <div class="search-results__no-results">
        Нет результатов
    </div>
</div>