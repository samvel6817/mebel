<?
use Local\Config;
use Local\Models\CatalogSection;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

$sectionTree = new \Local\Models\CatalogSectionTree();
$sections = $sectionTree->makeSectionsTree($arResult['SECTIONS']);
$sectionInfo = CatalogSection::getSectionInfo($arResult['SECTIONS'][0]['ID']);
?>

<div class="catalog">
    <div class="wrapper wrapper_padding">
        <div class="catalog__title">
            <div class="page-title">
                <h1 class="h1"><?=$arResult['SECTION_NAME']?></h1>
                <span class="page-title__description"><?=$arResult['SECTION_ELEMENT_CNT']?> товаров</span>
            </div>
        </div>

        <div class="catalog__grid catalog__grid_categories js-catalog-grid-categories active">
            <? foreach($sections as $arSection): ?>
                <? include 'include/section.php' ?>
            <? endforeach; ?>
        </div>
    </div>
</div>