<?php

namespace Local\Models;

use CIBlockSection;

class CatalogSection {

    public static function getSectionInfo($sectionID)
    {
        $section = \Bitrix\Iblock\SectionTable::getList([
            'filter' => ['ID' => $sectionID],
            'select' => ['DEPTH_LEVEL', 'NAME'],
        ])->fetch();

        $activeElements = CIBlockSection::GetSectionElementsCount($sectionID, Array("CNT_ACTIVE"=>"Y"));
        $section['COUNT'] = $activeElements;

        return $section;
    }

}