<span class="view-control__count-text">Выводить по</span>
<div class="view-control__count-panel">
    <a href="<?=$APPLICATION->GetCurPageParam('pageLimit=30', ['pageLimit'])?>"
       class="view-control__count-btn <?=($_SESSION['pageLimit'] == "30" || !isset($_SESSION['pageLimit'])) ? 'view-control__count-btn_active' : ''?>">30</a>
    <a href="<?=$APPLICATION->GetCurPageParam('pageLimit=60', ['pageLimit'])?>"
       class="view-control__count-btn <?=($_SESSION['pageLimit'] == "60" || $_GET['pageLimit'] == "60") ? 'view-control__count-btn_active' : ''?>">60</a>
    <a href="<?=$APPLICATION->GetCurPageParam('pageLimit=90', ['pageLimit'])?>"
       class="view-control__count-btn <?=($_SESSION['pageLimit'] == "90" || $_GET['pageLimit'] == "90") ? 'view-control__count-btn_active' : ''?>">90</a>
</div>