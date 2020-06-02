<?php

namespace Local\Models;

use Local\Config;

class SearchHint {

    public function getElements($query)
    {
        $articleProperty = Config::$properties['article'];
        
        $elements = new \Local\Models\Iblock\Elements();
        $elements->setGetPreviewImageSrc(true);

        //!TODO если юзаем DETAIL_PAGE_URL - подгружаются все свойства. Разобраться, не запросы ли это в базу
        //!TODO тип цены, скидка
        $elements->select([
            'IBLOCK_ID', 'ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'CATALOG_PRICE_1', "PROPERTY_$articleProperty"
        ]);
        $elements->filter([
            "LOGIC" => "OR",
            [
                'IBLOCK_ID' => Config::$iblocks['catalog'],
                '%NAME' => $query
            ],
            [
                'IBLOCK_ID' => Config::$iblocks['catalog'],
                'PROPERTY_' . $articleProperty => $query
            ],
        ]);

        $elements->pagination(['nPageSize' => 5]);
        
        return $elements->get();
    }

}