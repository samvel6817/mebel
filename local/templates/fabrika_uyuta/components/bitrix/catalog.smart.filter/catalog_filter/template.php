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

$templateData = array(
    'TEMPLATE_THEME' => $this->GetFolder() . '/themes/' . $arParams['TEMPLATE_THEME'] . '/colors.css',
    'TEMPLATE_CLASS' => 'bx-' . $arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME'])) {
    $this->addExternalCss($templateData['TEMPLATE_THEME']);
}

use Bitrix\Main\Loader; ?>

<form action="<? echo $arResult["FORM_ACTION"] ?>" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
      class="filters js-filters smartfilter" method="get">
    <button type="button"
            class="set_filter_new filter-floating-btn js-filter-floating-btn js-filter-submit-btn loading hidden-sm hidden-xs">
        <span class="filter-floating-btn__submit-text">Показать</span>
        <span class="filters-submit-count">3</span>
    </button>

    <? foreach ($arResult["HIDDEN"] as $arItem): ?>
        <input type="hidden" name="<? echo $arItem["CONTROL_NAME"] ?>" id="<? echo $arItem["CONTROL_ID"] ?>"
               value="<? echo $arItem["HTML_VALUE"] ?>"/>
    <? endforeach; ?>

    <? foreach ($arResult["ITEMS"] as $key => $arItem)//prices
    {
        $key = $arItem["ENCODED_ID"];

        if (isset($arItem["PRICE"])):
            if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                continue;

            $step_num = 4;
            $step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / $step_num;
            $prices = array();
            if (Bitrix\Main\Loader::includeModule("currency")) {
                for ($i = 0; $i < $step_num; $i++) {
                    $prices[$i] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MIN"]["VALUE"] + $step * $i, $arItem["VALUES"]["MIN"]["CURRENCY"], false);
                }
                $prices[$step_num] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MAX"]["VALUE"], $arItem["VALUES"]["MAX"]["CURRENCY"], false);
            } else {
                $precision = $arItem["DECIMALS"] ? $arItem["DECIMALS"] : 0;
                for ($i = 0; $i < $step_num; $i++) {
                    $prices[$i] = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * $i, $precision, ".", "");
                }
                $prices[$step_num] = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
            } ?>


            <fieldset class="bx-filter-parameters-box filter-dropdown js-filter-range js-filter-range">
                <span class="bx-filter-container-modef"></span>
                <button class="filter-dropdown__title-btn" type="button">
                    <span class="filter-dropdown__title">Цена, руб</span>
                </button>
                <div class="filter-dropdown__wrapper">
                    <div class="filter-range">
                        <div class="filter-range__inputs">
                            <label class="filter-range__label">
                                <input class="filter-range__input js-filter-range-from-input min-price"
                                       data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                       data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                       name="<?= $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                       id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>" type="text"
                                       value="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                       placeholder="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>"
                                       onkeyup="smartFilter.keyup(this)">
                            </label>
                            <span class="filter-range__separator">-</span>
                            <label class="filter-range__label">
                                <input class="filter-range__input js-filter-range-to-input max-price"
                                       data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                       data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                       name="<?= $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                       id="<?= $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>" type="text"
                                       value="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                       placeholder="<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
                                       onkeyup="smartFilter.keyup(this)">
                            </label>
                        </div>
                        <div class="filter-range__range-slider">
                            <label class="range-input">
                                <input class="js-range-slider"
                                       data-from="<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?: $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                       data-hide-from-to="true"
                                       data-hide-min-max="true"
                                       data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                       data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                       data-to="<?= $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?: $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                       data-type="double" name="DATA[PRICE][RANGE]"
                                       type="text" value=""/>
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        <?
        endif;
    } ?>

    <?
    //not prices
    foreach ($arResult["ITEMS"] as $key => $arItem) {
        if (empty($arItem["VALUES"]) || isset($arItem["PRICE"]))
            continue;

        if ($arItem["DISPLAY_TYPE"] == "A" && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0))
            continue; ?>
        <div class=" bx-filter-parameters-box">
            <span class="bx-filter-container-modef"></span>
            <? switch ($arItem["DISPLAY_TYPE"]) {
                case "A":
                    ?>
                    <fieldset
                            class="filter-dropdown js-filter-dropdown js-filter-range">
                        <button class="filter-dropdown__title-btn js-filter-dropdown-btn <?= (($arItem["VALUES"]["MIN"]["HTML_VALUE"] && $arItem["VALUES"]["MIN"]["HTML_VALUE"] != $arItem["VALUES"]["MIN"]["VALUE"]) || ($arItem["VALUES"]["MAX"]["HTML_VALUE"] && $arItem["VALUES"]["MAX"]["HTML_VALUE"] != $arItem["VALUES"]["MAX"]["VALUE"]) ? ' filter-dropdown__title-btn_open filter-dropdown__title-btn_selected' : '') ?>" type="button">
                                    <span class="filter-dropdown__icon">
                                        <svg height="0.3125rem" width="0.5rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.985 1.225L3.992 5.012-.002 1.225 1.303.011l2.689 2.571L6.68.012z"
                                                  fill="#9b9b9b"/>
                                        </svg>
                                    </span>
                            <span class="filter-dropdown__title"><?= $arItem["NAME"] ?></span>
                        </button>
                        <div class="filter-dropdown__wrapper js-filter-dropdown-content"
                             style="display: <?= (($arItem["VALUES"]["MIN"]["HTML_VALUE"] && $arItem["VALUES"]["MIN"]["HTML_VALUE"] != $arItem["VALUES"]["MIN"]["VALUE"]) || ($arItem["VALUES"]["MAX"]["HTML_VALUE"] && $arItem["VALUES"]["MAX"]["HTML_VALUE"] != $arItem["VALUES"]["MAX"]["VALUE"]) ? 'block' : 'none') ?>">
                            <div class="filter-range">
                                <div class="filter-range__inputs">
                                    <label class="filter-range__label">
                                        <input class="filter-range__input js-filter-range-from-input"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               name="<?= $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>" type="text"
                                               value="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                               placeholder="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>"
                                               id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                               onkeyup="smartFilter.keyup(this)">
                                    </label>
                                    <span class="filter-range__separator">-</span>
                                    <label class="filter-range__label">
                                        <input class="filter-range__input js-filter-range-to-input"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               name="<?= $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>" type="text"
                                               value="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                               id="<?= $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                               placeholder="<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
                                               onkeyup="smartFilter.keyup(this)">
                                    </label>
                                </div>
                                <div class="filter-range__range">
                                    <label class="range-input">
                                        <input class="js-range-slider"
                                               data-from="<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?: $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               data-hide-from-to="true"
                                               data-hide-min-max="true"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               data-to="<?= $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?: $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-type="double"
                                               name="DATA[WIDTH][RANGE]"
                                               type="text"
                                               value=""
                                        />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <?
                    break;
                case "B":
                    ?>

                    <fieldset
                            class="filter-dropdown js-filter-dropdown js-filter-range">
                        <button class="filter-dropdown__title-btn js-filter-dropdown-btn <?= (($arItem["VALUES"]["MIN"]["HTML_VALUE"] && $arItem["VALUES"]["MIN"]["HTML_VALUE"] != $arItem["VALUES"]["MIN"]["VALUE"]) || ($arItem["VALUES"]["MAX"]["HTML_VALUE"] && $arItem["VALUES"]["MAX"]["HTML_VALUE"] != $arItem["VALUES"]["MAX"]["VALUE"]) ? ' filter-dropdown__title-btn_open filter-dropdown__title-btn_selected' : '') ?>" type="button">
                                    <span class="filter-dropdown__icon">
                                        <svg height="0.3125rem" width="0.5rem" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.985 1.225L3.992 5.012-.002 1.225 1.303.011l2.689 2.571L6.68.012z"
                                                  fill="#9b9b9b"/>
                                        </svg>
                                    </span>
                            <span class="filter-dropdown__title"><?= $arItem["NAME"] ?></span>
                        </button>
                        <div class="filter-dropdown__wrapper js-filter-dropdown-content"
                             style="display: <?= (($arItem["VALUES"]["MIN"]["HTML_VALUE"] && $arItem["VALUES"]["MIN"]["HTML_VALUE"] != $arItem["VALUES"]["MIN"]["VALUE"]) || ($arItem["VALUES"]["MAX"]["HTML_VALUE"] && $arItem["VALUES"]["MAX"]["HTML_VALUE"] != $arItem["VALUES"]["MAX"]["VALUE"]) ? 'block' : 'none') ?>">
                            <div class="filter-range">
                                <div class="filter-range__inputs">
                                    <label class="filter-range__label">
                                        <input class="filter-range__input js-filter-range-from-input"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               name="<?= $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>" type="text"
                                               value="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                               placeholder="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>"
                                               id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                               onkeyup="smartFilter.keyup(this)">
                                    </label>
                                    <span class="filter-range__separator">-</span>
                                    <label class="filter-range__label">
                                        <input class="filter-range__input js-filter-range-to-input"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               name="<?= $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>" type="text"
                                               value="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                               placeholder="<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
                                               id="<?= $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                               onkeyup="smartFilter.keyup(this)">
                                    </label>
                                </div>
                                <div class="filter-range__range">
                                    <label class="range-input">
                                        <input class="js-range-slider"
                                               data-from="<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?: $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               data-hide-from-to="true"
                                               data-hide-min-max="true"
                                               data-max="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-min="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                               data-to="<?= $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?: $arItem["VALUES"]["MAX"]["VALUE"] ?>"
                                               data-type="double"
                                               name="DATA[WIDTH][RANGE]"
                                               type="text"
                                               value=""
                                        />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <?
                    break;
                case "F":

                    $checkedCount = 0;
                    foreach ($arItem["VALUES"] as $val => $ar) {
                        if ($ar["CHECKED"]) $checkedCount++;
                    }
                    ?>
                    <fieldset class="filter-dropdown js-filter-dropdown">
                        <button class="filter-dropdown__title-btn js-filter-dropdown-btn <?= ($checkedCount > 0 ? ' filter-dropdown__title-btn_open filter-dropdown__title-btn_selected' : '') ?>" type="button">
                            <span class="filter-dropdown__icon">
                                <svg height="0.3125rem" width="0.5rem" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.985 1.225L3.992 5.012-.002 1.225 1.303.011l2.689 2.571L6.68.012z"
                                          fill="#9b9b9b"/>
                                </svg>
                            </span>
                            <span class="filter-dropdown__title"><?= $arItem["NAME"] ?></span>
                            <span class="filter-dropdown__count filter-dropdown__count_hidden"><?= $checkedCount ?></span>
                        </button>
                        <div class="filter-dropdown__wrapper js-filter-dropdown-content"
                             style="display: <?= ($checkedCount > 0 ? 'block' : 'none') ?>">
                            <div class="filter-checkbox-scroll custom-scroll scrollbar js-filter-scroll scrollbar-inner">
                                <? foreach ($arItem["VALUES"] as $val => $ar) { ?>
                                    <label for="<?= $ar["CONTROL_ID"] ?>" data-role="label_<?=$ar["CONTROL_ID"]?>"
                                           class="checkbox__label checkbox__label_mb js-filter-checkbox"<?= ($ar["DISABLED"] ? ' disabled' : '') ?>
                                           <? if (!$ar["DISABLED"]) { ?>onclick="smartFilter.keyup(BX('<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')); BX.toggleClass(this, 'bx-active');"<? } else { ?>style="opacity: .5;"<? } ?>>
                                        <input class="checkbox__input" name="<?= $ar["CONTROL_NAME"] ?>" type="checkbox"
                                               value="<?= $ar["HTML_VALUE"] ?>"<? echo $ar["CHECKED"] ? ' checked="checked"' : '' ?><?= ($ar["DISABLED"] ? ' disabled' : '') ?>
                                               id="<?= $ar["CONTROL_ID"] ?>">
                                        <span class="checkbox__text checkbox__text_checked-pink"><?= $ar["VALUE"]; ?> (<?= intval($ar["ELEMENT_COUNT"]) ?>)</span>
                                    </label>
                                <? } ?>
                            </div>
                        </div>
                    </fieldset>

                    <?
                    break;
                case "K":

                    $checkedCount = 0;
                    foreach ($arItem["VALUES"] as $val => $ar) {
                        if ($ar["CHECKED"]) $checkedCount++;
                    }
                    ?>
                    <fieldset
                            class="filter-dropdown js-filter-dropdown">
                        <button class="filter-dropdown__title-btn js-filter-dropdown-btn <?= ($checkedCount > 0 ? ' filter-dropdown__title-btn_open filter-dropdown__title-btn_selected' : '') ?>" type="button">
                            <span class="filter-dropdown__icon">
                                <svg height="0.3125rem" width="0.5rem" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.985 1.225L3.992 5.012-.002 1.225 1.303.011l2.689 2.571L6.68.012z"
                                          fill="#9b9b9b"/>
                                </svg>
                            </span>
                            <span class="filter-dropdown__title"><?= $arItem["NAME"] ?></span>
                            <span class="filter-dropdown__count filter-dropdown__count_hidden"><?= $checkedCount ?></span>
                        </button>
                        <div class="filter-dropdown__wrapper js-filter-dropdown-content"
                             style="display: <?= ($checkedCount > 0 ? 'block' : 'none') ?>">
                            <div class="filter-checkbox-scroll custom-scroll scrollbar js-filter-scroll scrollbar-inner">
                                <? foreach ($arItem["VALUES"] as $val => $ar) { ?>
                                    <label for="<?= $ar["CONTROL_ID"] ?>" data-role="label_<?=$ar["CONTROL_ID"]?>"
                                           class="checkbox__label checkbox__label_mb js-filter-checkbox"<?= ($ar["DISABLED"] ? ' disabled' : '') ?>
                                           <? if (!$ar["DISABLED"]) { ?>onclick="smartFilter.keyup(BX('<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')); BX.toggleClass(this, 'bx-active');"<? } else { ?>style="opacity: .5;"<? } ?>>
                                        <input class="checkbox__input" name="<?= $ar["CONTROL_NAME"] ?>" type="checkbox"
                                               value="<?= $ar["HTML_VALUE"] ?>"<? echo $ar["CHECKED"] ? ' checked="checked"' : '' ?><?= ($ar["DISABLED"] ? ' disabled' : '') ?>
                                               id="<?= $ar["CONTROL_ID"] ?>">
                                        <span class="checkbox__text checkbox__text_checked-pink"><?= $ar["VALUE"]; ?> (<?= intval($ar["ELEMENT_COUNT"]) ?>)</span>
                                    </label>
                                <? } ?>
                            </div>
                        </div>
                    </fieldset>

                    <?
                    break;
            } ?>
        </div>
        <?
    }
    ?>

    <div class="filters__submit-wrapper">
        <button  class="filters__submit js-filter-submit-btn" type="button" id="set_filter" name="set_filter">
            <span class="filters__submit-text">Показать</span>
            <span class="filters-submit-count"><?= intval($arResult["ELEMENT_COUNT_ALL"]) ?></span>
        </button>
        <button class="filters__reset js-filters-reset" type="reset"
                id="del_filter"
                name="del_filter">
            <svg class="filters__reset-icon" height="0.5rem" viewBox="0 0 8 8"
                 width="0.5rem"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M6.12 7.534l-2.122-2.12-2.121 2.12A1 1 0 01.463 6.12L2.583 4 .464 1.876A1 1 0 011.877.463l2.12 2.122L6.12.463a1 1 0 011.415 1.414L5.413 4l2.121 2.12A1 1 0 016.12 7.534z"
                      fill="#999"></path>
            </svg>
            <span class="filters__reset-text hidden-md">Сбросить</span>
        </button>
        <div class="bx-filter-popup-result <? if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"] ?>"
             id="modef" <? if (!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"'; ?>
             style="display: none;">
            <? echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">' . intval($arResult["ELEMENT_COUNT"]) . '</span>')); ?>
            <span class="arrow"></span>
            <br/>
            <a href="<? echo $arResult["FILTER_URL"] ?>"
               target=""><? echo GetMessage("CT_BCSF_FILTER_SHOW") ?></a>
        </div>
    </div>

</form>

<script type="text/javascript">
    $(function () {
        $('.js-range-slider').change(function () {
            smartFilter.keyup(this);
        });
    });

    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>

