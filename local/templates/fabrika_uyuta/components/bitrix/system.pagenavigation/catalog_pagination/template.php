<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>



<? if ($arResult["NavPageCount"] > 1): ?>
    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_1=" . $plus
        ?>
        <div class="product-list__more-btn js-ajax-load-more-btn-container">
            <button type="button" class="btn btn_green btn_small js-ajax-load-more" data-url="<?= $url ?>">Показать
                ещё
            </button>
        </div>
    <? else: ?>
        <div class="product-list__more-btn hidden-lg hidden-md hidden-sm hidden-xs js-ajax-load-more-container">
            <button type="button" class="btn btn_green btn_small js-ajax-load-more">Загружено всё</button>
        </div>

    <? endif ?>
<? endif ?>

<div class="product-list__bottom-bar js-product-list-bottom-bar-ajax-replace">
    <div class="pagination">
        <? if ($arResult["NavPageNomer"] > 1): ?>
            <a class="pagination__btn pagination__btn_next"
               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
                <svg height="0.75rem" viewBox="0 0 7 12" width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.68 12.007l1.326-1.4L2.641 6l4.365-4.61L5.68-.01-.009 6z" fill="#999"></path>
                </svg>
            </a>
        <? else: ?>
            <span class="pagination__btn pagination__btn_prev pagination__btn_not-next">
                <svg height="0.75rem" viewBox="0 0 7 12" width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.68 12.007l1.326-1.4L2.641 6l4.365-4.61L5.68-.01-.009 6z" fill="#999"></path>
                </svg>
            </span>
        <? endif ?>


        <div class="pagination__pages">
            <?php if ($arResult["nStartPage"] > 1): ?>
                <a class="pagination__page"
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavNum"] ?>"><?= $arResult["NavNum"] ?></a>
                <span class="pagination__separator">...</span>
            <?php endif; ?>

            <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                    <span class="pagination__page pagination__page_active"><?= $arResult["nStartPage"] ?></span>
                <? else: ?>
                    <a class="pagination__page"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
                <? endif ?>
                <? $arResult["nStartPage"]++ ?>
            <? endwhile ?>

            <?php if ($arResult["nEndPage"] < $arResult["NavPageCount"]): ?>
                <span class="pagination__separator">...</span>
                <a class="pagination__page"
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>"><?= $arResult["NavPageCount"] ?></a>
            <?php endif; ?>
        </div>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <a class="pagination__btn pagination__btn_next"
               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
                <svg height="0.75rem" viewBox="0 0 7 12" width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.316 12.007l-1.324-1.4L4.356 6-.008 1.39l1.324-1.4L7.006 6z" fill="#999"></path>
                </svg>
            </a>
        <? else: ?>
            <span class="pagination__btn pagination__btn_prev pagination__btn_not-next"
                  href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
                <svg height="0.75rem" viewBox="0 0 7 12" width="0.4375rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.316 12.007l-1.324-1.4L4.356 6-.008 1.39l1.324-1.4L7.006 6z" fill="#999"></path>
                </svg>
            </span>
        <? endif ?>
    </div>

    <div class="view-control hidden-xs">
        <div class="view-control__count">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/catalog/page_element_count.php"
                )
            ); ?>
        </div>
    </div>

</div>
