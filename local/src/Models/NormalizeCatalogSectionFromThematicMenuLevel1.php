<?php

namespace Local\Models;

use Local\Models\Iblock\Sections;


/*

Алгоритм:

Перебираем все разделы в корне {
    $тем. меню 1го уровня - создаем раздел, если нет. Получаем его ид

    "Раздел в корне" (Офисная мебель) кладем в $тем. меню 1го уровня.

    Перебираем разделы состоящие в "Раздел в корне" (Офисная мебель) {
        $тем. меню 2го уровня - создаем раздел, если нет. Получаем его ид

        "тек. раздел" помещаем в $тем. меню 2го уровня
    }
}
 */

class NormalizeCatalogSectionFromThematicMenuLevel1 {

    public function exe()
    {
        $sections = $this->getSectionInitialOneLevel();
        $thematicMenuSections = $this->makeThematicMenu($sections);

        foreach ($sections as $section) {
            $this->moveSection($section, $thematicMenuSections);
        }

        $this->moveSectionsToMainSection();
    }

    protected function getSectionInitialOneLevel()
    {
        $section = new Sections();
        $section->select(['UF_LEFT_MENU']);
        $section->filter(['IBLOCK_ID' => 14, 'DEPTH_LEVEL' => 1]);

        return $section->get();
    }

    protected function makeThematicMenu($sections)
    {
        $thematicMenuElementsID = [];

        foreach ($sections as $section) {
            $thematicMenuElementsID[] = $section['UF_LEFT_MENU'];
        }

        $section = new Sections();
        $section->filter(['ID' => $thematicMenuElementsID]);

        return $section->get('ID');
    }

    /**
     * @param $section
     *
     * Переместит 1ый уровень в новые разделы из тематического каталога 1го уровня
     */
    protected function moveSection($section, $thematicMenuSections)
    {
        if (!$section['UF_LEFT_MENU']) {
            return;
        }

        $menuElement = $thematicMenuSections[$section['UF_LEFT_MENU']];
        $thematicMenuNewSectionID = $this->createOrGetThematicMenuSection($menuElement);
        
        //!Запись
        $bs = new \CIBlockSection;
        $bs->Update($section['ID'], ['IBLOCK_SECTION_ID' => $thematicMenuNewSectionID]);
    }

    protected function createOrGetThematicMenuSection($menuElement)
    {
        $section = new Sections();
        $section->filter(['IBLOCK_ID' => 14, 'SECTION_ID' => false, 'NAME' => $menuElement['NAME']]);
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
            'CODE' => \CUtil::translit($menuElement['NAME'], 'ru'),
            'SORT' => 500,
        ];

        $id = $bs->Add($arFields);

        if ($bs->LAST_ERROR) {
            dump($menuElement['CODE']);
            dump($id);
            echo $bs->LAST_ERROR;
            die;
        }

        return $id;
    }

    protected function moveSectionsToMainSection()
    {
        $section = new Sections();
        $section->select(['UF_LEFT_MENU']);
        $section->filter(['IBLOCK_ID' => 14, 'DEPTH_LEVEL' => 1]);

        $sections = $section->get();

        //!Запись
        $bs = new \CIBlockSection;

        $arFields = [
            'ACTIVE' => 'Y',
            'IBLOCK_ID' => 14,
            'NAME' => 'Тематический каталог',
            'CODE' => 'thematic_catalog',
            'SORT' => 500,
        ];
        $id = $bs->Add($arFields);

        if ($bs->LAST_ERROR) {
            echo $bs->LAST_ERROR;
            die;
        }

        foreach ($sections as $sect) {
            $bs->Update($sect['ID'], ['IBLOCK_SECTION_ID' => $id]);
        }
    }
}