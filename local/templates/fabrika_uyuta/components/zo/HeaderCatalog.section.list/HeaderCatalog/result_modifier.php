<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$sectionTree = new \Local\Models\CatalogSectionTree();
$sections = $sectionTree->makeSectionsTree($arResult['SECTIONS']);

if(!empty($sections)) {
    $arResult = $sections;
}

//Создаем отдаельный массив с родительскими разделами (LVL1 или LVL2), чтобы выводить в верхнем каталоге слева
if(isset($arResult['SECTIONS'])) {
    $arNewSection = false;
    $arLevel2 = false;
    $arLevel3 = false;
    $newLevel3 = false;
    foreach ($arResult['SECTIONS'] as $key => $arItem) {
        if($arItem['RELATIVE_DEPTH_LEVEL'] == 2) {
            $arNewSection[$arItem['ID']] = $arItem;
            $arLevel2 = $arItem['ID'];
        } elseif($arItem['RELATIVE_DEPTH_LEVEL'] == 3 && $arLevel2) {
            $arNewSection[$arLevel2]['CHILD'][$arItem['ID']] = $arItem;
            $arLevel3 = $arItem['ID'];
        } elseif($arItem['RELATIVE_DEPTH_LEVEL'] == 4 && $arLevel3) {
            $arNewSection[$arLevel2]['CHILD'][$arLevel3]['CHILD'][$arItem['ID']] = $arItem;
        } elseif($arItem['RELATIVE_DEPTH_LEVEL'] == 3) {
            $arNewSection[$arItem['ID']] = $arItem;
            $newLevel3 = $arItem['ID'];
        } elseif($arItem['RELATIVE_DEPTH_LEVEL'] == 4 && $newLevel3) {
            $arNewSection[$newLevel3]['CHILD'][$arItem['ID']] = $arItem;
        }
    }
    if($arNewSection) {
        $arResult['SECTIONS'] = $arNewSection;
    }
}
