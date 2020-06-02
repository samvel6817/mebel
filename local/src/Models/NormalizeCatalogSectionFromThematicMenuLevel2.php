<?php

namespace Local\Models;

use Local\Models\Iblock\Elements;
use Local\Models\Iblock\Sections;


/**
 * Class NormalizeCatalogSectionFromThematicMenuLevel2
 * @package Local\Models
 *
 * Перед юзанием скрипта убрать галку "проверять код разделов на уникальность"
 */
class NormalizeCatalogSectionFromThematicMenuLevel2 {

    public function exe()
    {
        $sections = $this->getMovedSection();
        $menuElements = $this->getThematicMenuElements($sections);
        
        $this->moveSections($sections, $menuElements);
    }

    protected function getMovedSection()
    {
        $section = new Sections();
        $section->select(['UF_LEFT_MENU_2']);
        $section->filter(['IBLOCK_ID' => 14, 'DEPTH_LEVEL' => 2]);

        return $section->get();
    }

    protected function getThematicMenuElements($sections)
    {
        $info = [];
        $thematicMenuElementsID = [];

        foreach ($sections as $section) {
            if ($section['UF_LEFT_MENU_2']) {
                $thematicMenuElementsID[] = $section['UF_LEFT_MENU_2'];
            };
        }

        if (empty($thematicMenuElementsID)) {
            return false;
        }

        $sections = new Sections();
        $sections->filter(['ID' => $thematicMenuElementsID, 'IBLOCK_ID' => 38]);
        $thematicMenuElements = $sections->get('ID');

        return $thematicMenuElements;
    }

    protected function moveSections($sections, $menuElements)
    {
        foreach ($sections as $section) {
            if (!$section['UF_LEFT_MENU_2']) {
                continue;
            }

            $menuElement = $menuElements[$section['UF_LEFT_MENU_2']];
            $thematicMenuNewSectionID = $this->createOrGetThematicMenuSection($menuElement, $section['IBLOCK_SECTION_ID']);

            if (!$thematicMenuNewSectionID) {
                continue;
            }

            //!запись
            $bs = new \CIBlockSection;
            $bs->Update($section['ID'], ['IBLOCK_SECTION_ID' => $thematicMenuNewSectionID]);

        }
    }

    protected function createOrGetThematicMenuSection($menuElement, $menuItemSection)
    {
        $section = new Sections();
        $section->filter(['IBLOCK_ID' => 14, 'SECTION_ID' => $menuItemSection, 'NAME' => $menuElement['NAME']]);
        $res = $section->first();

        if ($res) {
            return $res['ID'];
        }


        //!запись
        $bs = new \CIBlockSection;
        $arFields = [
            'ACTIVE' => 'Y',
            'IBLOCK_ID' => 14,
            'NAME' => $menuElement['NAME'],
            'CODE' => $menuElement['CODE'],
            'IBLOCK_SECTION_ID' => intval($menuItemSection),
            'SORT' => 500,
        ];

        $id = $bs->Add($arFields);

        if ($bs->LAST_ERROR) {
            dump($menuElement['CODE']);
            dump($id);
            echo $bs->LAST_ERROR;
        }

        return $id;
    }

}