<?php

use \Local\Models\ProductParametersType1;
use \Local\Models\ProductParametersType2;


$arResult = getProductParameters($arResult);


function getProductParameters($arResult) {
    $paramType1 = new ProductParametersType1($arResult['PROPERTIES']);
    $paramType2 = new ProductParametersType2($arResult['PROPERTIES']);

    $arResult['params_type_1'] = $paramType1->getParams();
    $arResult['params_type_2'] = $paramType2->getParams();

    return $arResult;
}