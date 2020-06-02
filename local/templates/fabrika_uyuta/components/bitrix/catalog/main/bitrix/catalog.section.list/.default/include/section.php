<?
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");

$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete);
?>

<div class="catalog__grid-item" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
    <div class="catalog-item" style="background-image: url('<? $arSection['PICTURE']['SRC'] ?>')" tabindex="0">
        <span class="catalog-item__title"><?= $arSection['NAME'] ?></span>
        <span class="catalog-item__counter"><?= $arSection['ELEMENT_CNT']; ?></span>
        <div class="catalog-item__dropdown">
            <a class="catalog-item__category-link" href="<?= $arSection['SECTION_PAGE_URL'] ?>">
                <span class="catalog-item__title"><?= $arSection['NAME'] ?></span>
                <span class="catalog-item__counter"><?= $arSection['ELEMENT_CNT']; ?></span>
            </a>
            <ul class="catalog-item__list">
                <? foreach($arSection['CHILD'] as $subsection): ?>
                    <li class="catalog-item__list-item">
                        <a class="catalog-item__link" href="<?= $subsection['SECTION_PAGE_URL'] ?>">
                            <span class="catalog-item__link-title"><?= $subsection['NAME']; ?></span>
                            <span class="catalog-item__link-counter"><?= $subsection['ELEMENT_CNT']; ?></span>
                        </a>
                    </li>
                <? endforeach ?>
            </ul>
        </div>
    </div>
</div>