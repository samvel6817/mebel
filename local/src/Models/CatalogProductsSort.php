<?php

namespace Local\Models;

class CatalogProductsSort {

    public static function getParamsSort($arGetParams)
    {
        $arParams = [];

        //Если есть гет параметры то сессию удаляем, чтобы добавить новую сессию
        if(isset($arGetParams['sort'], $arGetParams['method'])) {
            unset($_SESSION['sort'], $_SESSION['method']);
        }

        //Проверяем, если есть Гет параметр sort=price или есть сессия с sort=catalog_PRICE_1
        if($arGetParams['sort'] == "price" || $_SESSION['sort'] == 'catalog_PRICE_1') {
            $_SESSION['sort'] = 'catalog_PRICE_1';
            $arParams['ELEMENT_SORT_FIELD'] = 'catalog_PRICE_1';
        }

        //Проверяем, если есть Гет параметр sort=name или есть сессия с sort=NAME
        if($arGetParams['sort'] == "name" || $_SESSION['sort'] == 'NAME') {
            $_SESSION['sort'] = 'NAME';
            $arParams['ELEMENT_SORT_FIELD'] = 'NAME';
        }

        //Проверяем, если есть Гет параметр sort=available или есть сессия с sort=PROPERTY_ON_STORE
        if($arGetParams['sort'] == "available" || $_SESSION['sort'] == 'PROPERTY_ON_STORE') {
            $_SESSION['sort'] = 'PROPERTY_ON_STORE';
            $arParams['ELEMENT_SORT_FIELD'] = 'PROPERTY_ON_STORE';
        }

        /*Проверяем порядок сортировки*/
        if($arGetParams['method'] == 'asc' || $_SESSION['method'] == 'asc') {
            $_SESSION['method'] = 'asc';
            $arParams['ELEMENT_SORT_ORDER'] = 'asc';
        }elseif($arGetParams['method'] == 'desc' || $_SESSION['method'] == 'desc') {
            $_SESSION['method'] = 'desc';
            $arParams['ELEMENT_SORT_ORDER'] = 'desc';
        }

        return $arParams;
    }

    public static function getParamsElemsLimit($arGetParams)
    {
        $arParams = [];

        //Модуль числа
        $pageLimit = abs($arGetParams['pageLimit']);

        if($pageLimit > 0 && is_int($pageLimit)) {
            unset($_SESSION['pageLimit']);
            if (!isset($_SESSION['pageLimit'])) {
                $_SESSION['pageLimit'] = $pageLimit;
            }
            $arParams['PAGE_ELEMENT_COUNT'] = $pageLimit;
        }
        return $arParams;
    }

}