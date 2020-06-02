<a class="sorting__label js-sorting-item" href="<?=$APPLICATION->GetCurPageParam('sort=price&method=asc', ['sort', 'method'])?>">
    <input
        <?=($_SESSION['sort'] == 'catalog_PRICE_1' && $_SESSION['method'] == 'asc' || !isset($_GET['sort'], $_GET['method'])) ? 'checked' : ''?>
        class="sorting__input" name="SORTING" type="radio" value="по возрастанию цены">
    <span class="sorting__item-text">по возрастанию цены</span>
</a>
<a class="sorting__label js-sorting-item" href="<?=$APPLICATION->GetCurPageParam ('sort=price&method=desc', ['sort', 'method'])?>">
    <input
        <?=($_SESSION['sort'] == 'catalog_PRICE_1' && $_SESSION['method'] == 'desc') ? 'checked' : ''?>
        class="sorting__input" name="SORTING"  type="radio" value="по убыванию цены">
    <span class="sorting__item-text">по убыванию цены</span>
</a>

<a class="sorting__label js-sorting-item" href="<?=$APPLICATION->GetCurPageParam ('sort=name&method=asc', ['sort', 'method'])?>">
    <input
        <?=($_SESSION['sort'] == 'NAME' && $_SESSION['method'] == 'asc') ? 'checked' : ''?>
        class="sorting__input" name="SORTING" type="radio" value="по алфавиту от А до Я">
    <span class="sorting__item-text">по алфавиту от А до Я</span>
</a>
<a class="sorting__label js-sorting-item" href="<?=$APPLICATION->GetCurPageParam ('sort=name&method=desc', ['sort', 'method'])?>">
    <input
        <?=($_SESSION['sort'] == 'NAME' && $_SESSION['method'] == 'desc') ? 'checked' : ''?>
        class="sorting__input" name="SORTING" type="radio" value="по алфавиту от Я до А">
    <span class="sorting__item-text">по алфавиту от Я до А</span>
</a>
<a class="sorting__label js-sorting-item" href="<?=$APPLICATION->GetCurPageParam ('sort=available&method=desc', ['sort', 'method'])?>">
    <input
        <?=($_SESSION['sort'] == 'PROPERTY_ON_STORE' && $_SESSION['method'] == 'desc') ? 'checked' : ''?>
        class="sorting__input" name="SORTING" type="radio" value="есть в наличии">
    <span class="sorting__item-text">есть в наличии</span>
</a>