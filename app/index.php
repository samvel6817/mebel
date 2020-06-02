<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

//Init application
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($configuration);


//Routes
$app->post('/app/cart/product-add', '\Local\Controllers\CartController:addProductToCart');
$app->post('/app/cart/product-remove', '\Local\Controllers\CartController:removeProductFromCart');

$app->get('/app/search-hint', '\Local\Controllers\CommonAjaxController:searchHint');


//Run application
$app->run();
