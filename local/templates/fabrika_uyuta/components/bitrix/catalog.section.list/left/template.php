<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$i = 1;
$sliced = array_slice($arResult['SECTIONS'], 5);
?>

<? if ($arResult['SECTIONS']): ?>
<div class="categories">
    <ul class="categories__list">
        <?php foreach ($arResult['SECTIONS'] as $arSection): ?>
            <?php if($i > 5){
                break;
            }?>
            <li class="categories__item">
                <a class="categories__link" href="<?=$arSection['SECTION_PAGE_URL']; ?>">
                    <span class="categories__text"><?=$arSection['NAME']; ?></span>
                    <span class="categories__count"><?=$arSection['ELEMENT_CNT']; ?></span>
                </a>
            </li>
            <?$i++?>
        <?php endforeach; ?>
        </ul>

        <?php if(count($sliced) > 0):?>
            <ul class="categories__list js-categories-list" style="display: none">
                <?php foreach($sliced as $arSectionSliced):?>
                    <li class="categories__item">
                        <a class="categories__link" href="<?=$arSectionSliced['SECTION_PAGE_URL']?>">
                            <span class="categories__text"><?=$arSectionSliced['NAME']?></span>
                            <span class="categories__count"><?=$arSectionSliced['ELEMENT_CNT']?></span>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>

            <div class="categories__btn-more">
                <button class="categories__btn-more js-categories-btn-more" type="button">
                    <span class="categories__btn-more-text">Показать ещё</span>
                    <span class="categories__btn-more-count"><?=count($sliced)?></span>
                </button>
            </div>
        <?php endif;?>
    </div>
<? endif; ?>
