<?php

use Libs\Iblock\Elements;

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

global $USER;
if (!$USER->IsAdmin()) {
    die;
}

$prop = 'NAPOLNENIE_DIVANA';


$elements = new Elements;
$elements->select(['ID', 'IBLOCK_ID', 'NAME']);
$elements->filter(['IBLOCK_ID' => 14]);
$elements->pagination(['nPageSize' => 1000, 'iNumPage' => $_GET['page']]);
$products = $elements->get();

if ($_SESSION['CHECK_ID'] == $products[0]['ID']) {
    echo 0;
    die;
}

$_SESSION['CHECK_ID'] = $products[0]['ID'];

foreach ($products as $product) {
    $material = trim($product['PROPERTIES'][$prop]['VALUE']);

    if (!$material) {
        continue;
    }

    $_SESSION['MATERIAL'][$material] = $_SESSION['MATERIAL'][$material] ? ++$_SESSION['MATERIAL'][$material] : 1;
}

echo 1;
?>