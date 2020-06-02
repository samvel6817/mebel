<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Local\Config;

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
$i = 0;
?>

<?php if (isset($arResult['SECTIONS'])): ?>
    <? $secName = $arResult['SECTION']['NAME'] ?>

    <li class="header-catalog__2-lvl-item js-header-catalog-2-lvl-item active"
        data-subsection-name="<?= $secName ?>">
        <?php foreach ($arResult['SECTIONS'] as $keySec => $arChildSections): ?>
            <ul class="header-catalog__2-lvl-wrapper js-header-catalog-2-lvl-wrapper">
                <li class="header-catalog__2-lvl-title">
                    <a class="header-catalog__2-lvl-link" href="<?= $arChildSections['URL'] ?>">
                        <?= $arChildSections['NAME'] ?>
                    </a>
                    <?php if($arChildSections['CHILD']):?>
                        <button class="header-catalog__2-lvl-link-icon hidden-lg hidden-md js-header-catalog-dropdown-btn"
                                type="button">
                            <svg class="header-catalog__icon-more js-header-catalog-icon-more"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="10">
                                <path d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/>
                            </svg>
                        </button>
                    <?php endif;?>
                </li>
                <?php if ($arChildSections['CHILD']): ?>
                    <li class="header-catalog__3-lvl-dropdown js-header-catalog-3-lvl-dropdown">
                        <ul class="header-catalog__3-lvl-list">
                            <?php foreach ($arChildSections['CHILD'] as $arChildSectionLvl2): ?>
                                <li class="header-catalog__3-lvl-item">
                                    <a href="<?= $arChildSectionLvl2['URL'] ?>"
                                       class="header-catalog__3-lvl-link"><?= $arChildSectionLvl2['NAME'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endforeach; ?>
    </li>

<?php else: ?>
    <div class="header-catalog__categories-wrapper js-header-catalog-categories-wrapper">
        <div class="header-catalog__categories-scroll custom-scroll scrollbar scrollbar-inner">
            <ul class="header-catalog__1-lvl-list js-header-catalog-1-lvl active">
                <?php foreach ($arResult as $key => $arParentSec): ?>
                    <li class="header-catalog__1-lvl-item">
                        <button type="button"
                                class="header-catalog__1-lvl-link js-header-catalog-1-lvl-link <?= ($i == 0) ? 'active loaded' : '' ?> hidden-lg hidden-md"
                                data-subsection-name="<?= $arParentSec['NAME'] ?>"
                                data-subsection-id="<?= $arParentSec['ID'] ?>"><?= $arParentSec['NAME'] ?></button>
                        <a href="<?=$arParentSec['URL']?>"
                                class="header-catalog__1-lvl-link js-header-catalog-1-lvl-link <?= ($i == 0) ? 'active loaded' : '' ?> hidden-sm hidden-xs"
                                data-subsection-name="<?= $arParentSec['NAME'] ?>"
                                data-subsection-id="<?= $arParentSec['ID'] ?>"><?= $arParentSec['NAME'] ?></a>
                    </li>
                    <? $i++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="header-catalog__subcategories-wrapper js-header-catalog-subcategories-wrapper">
        <button class="header-catalog__back-btn js-header-catalog-back-btn hidden-lg hidden-md hidden-sm">
            <span class="header-catalog__back-btn-icon">
                <svg height="0.75rem" viewBox="0 0 7 12" width="0.4375rem"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.682 12.008l1.325-1.4L2.642 6l4.365-4.608-1.325-1.4L-.008 6z" fill="#333"/>
                </svg>
            </span>
            <span class="header-catalog__back-btn-text js-header-catalog-back-btn-text">Назад</span>
        </button>

        <div class="header-catalog__subcategories-inner js-preloader-for-subcategories">
            <div class="header-catalog__subcategories-scroll">
                <div class="header-catalog__subcategories-scroll-wrapper js-header-catalog-subcategories-scroll custom-scroll scrollbar scrollbar-inner">
                    <ul class="header-catalog__2-lvl-list js-header-catalog-2-lvl-list active">
                        <? $j = 0; ?>
                        <?php foreach ($arResult as $keySec => $arItem): ?>
                            <?php if ($arItem['CHILD']): ?>
                                <li class="header-catalog__2-lvl-item js-header-catalog-2-lvl-item <?= ($j == 0) ? "active" : "" ?>"
                                    data-subsection-name="<?= $arItem['NAME'] ?>">
                                    <?php foreach ($arItem['CHILD'] as $arChildSectionLvl2): ?>
                                        <ul class="header-catalog__2-lvl-wrapper js-header-catalog-2-lvl-wrapper">
                                            <li class="header-catalog__2-lvl-title">
                                                <a class="header-catalog__2-lvl-link"
                                                   href="<?= $arChildSectionLvl2['URL'] ?>"><?= $arChildSectionLvl2['NAME'] ?></a>
                                                <?php if($arChildSectionLvl2['CHILD']):?>
                                                    <button class="header-catalog__2-lvl-link-icon hidden-lg hidden-md js-header-catalog-dropdown-btn"
                                                            type="button">
                                                        <svg class="header-catalog__icon-more js-header-catalog-icon-more"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                             width="10">
                                                            <path d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/>
                                                        </svg>
                                                    </button>
                                                <?php endif;?>
                                            </li>
                                            <?php if ($arChildSectionLvl2['CHILD']): ?>
                                                <?php foreach ($arChildSectionLvl2['CHILD'] as $arChildSectionLvl3): ?>
                                                    <li class="header-catalog__3-lvl-dropdown js-header-catalog-3-lvl-dropdown">
                                                        <ul class="header-catalog__3-lvl-list">
                                                            <li class="header-catalog__3-lvl-item">
                                                                <a href="<?= $arChildSectionLvl3['URL'] ?>"
                                                                   class="header-catalog__3-lvl-link"><?= $arChildSectionLvl3['NAME'] ?></a>
                                                                <?php if ($arChildSectionLvl3['CHILD']): ?>
                                                                    <ul>
                                                                        <?php foreach ($arChildSectionLvl3['CHILD'] as $arChildSectionLvl4): ?>
                                                                            <li>
                                                                                <a href="<?= $arChildSectionLvl4['URL'] ?>"><?= $arChildSectionLvl4['NAME'] ?></a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endforeach; ?>
                                </li>
                                <? $j++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
