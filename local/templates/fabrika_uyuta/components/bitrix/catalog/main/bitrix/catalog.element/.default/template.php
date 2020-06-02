<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<?// dump($arResult) ?>
<?$arResult['ID']?>
<?$arResult['DETAIL_TEXT']?>
<?$arResult['DETAIL_PICTURE']['SRC']?>

<? $arResult['PRICES']['BASE']['PRINT_VALUE_VAT'] ?>

<div style="margin: 15px;">
    <?=$arResult['NAME']?>
</div>

<button onclick="Cart.addProductToCart(<?=$arResult['ID']?>)">Купить</button>

<div>
    <? foreach ($arResult['params_type_1'] as $paramsBlock): ?>

       <?= $paramsBlock['NAME']; ?>

        <? foreach ($paramsBlock['ITEMS'] as $param): ?>
            <div>
                <?= $param['NAME']; ?>
                <input name="param-type-1-block-<?= $paramsBlock['ID']; ?>" type="radio" style="height: 10px; -webkit-appearance: radio;">
                <img src="<?= $param['IMG']; ?>" alt="" width="64">
                Цена: <?= $param['PRICE']; ?>
            </div>
        <? endforeach; ?>
    
    <? endforeach; ?>
</div>

<script>
    window.onload = function() {
        console.log($('#panel'));
    }

</script>