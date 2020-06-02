<?php
use Local\Models\CatalogSection;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($arParams['SECTION_ID'] == 0) {
    $arResult['SECTION_NAME'] = "Каталог";
    $allElemCnt = 0;
    foreach ($arResult['SECTIONS'] as $arItem) {
        if($arItem['DEPTH_LEVEL'] == 1) {
            $allElemCnt += $arItem['ELEMENT_CNT'];
        }
    }
    $arResult['SECTION_ELEMENT_CNT'] = $allElemCnt;
}else {
    $res = CIBlockSection::GetByID($arParams['SECTION_ID']);
    if($ar_res = $res->GetNext())
        $arResult['SECTION_NAME'] = $ar_res['NAME'];

    $allElemCnt = 0;
    foreach ($arResult['SECTIONS'] as $arItem) {
        if($arItem['DEPTH_LEVEL'] == 2) {
            $allElemCnt += $arItem['ELEMENT_CNT'];
        }
    }
    $arResult['SECTION_ELEMENT_CNT'] = $allElemCnt;
}
