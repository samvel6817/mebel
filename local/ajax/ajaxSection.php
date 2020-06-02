<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$request = \Bitrix\Main\Context::getCurrent()->getRequest();

//Обновление и добавление товара для пользователя
$sectionID = intval($request->get('sectionID'));

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
);