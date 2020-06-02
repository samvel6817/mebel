<?php

namespace Local\Models;

class CatalogSectionTree {

    /**
     * Возвращает разделы в виде дерева.
     * Дочерние категории раздела помещаются в массив "CHILD".
     *
     * @param array $sections
     * @return array
     */
    public function makeSectionsTree($sections)
    {
        $sectionsTree = [];

        if($sections[0]['RELATIVE_DEPTH_LEVEL'] == 1) {
            foreach ($sections as $section) {
                if ($section['RELATIVE_DEPTH_LEVEL'] == 1) {
                    $sectionsTree[$section['ID']] = $section;
                    continue;
                }

                if ($section['RELATIVE_DEPTH_LEVEL'] == 2) {
                    $sectionsTree[$section['IBLOCK_SECTION_ID']]['CHILD'][$section['ID']] = $section;
                    continue;
                }

                if ($section['RELATIVE_DEPTH_LEVEL'] == 3) {
                    $sectionsTree = $this->putSectionThirdLevelInTree($section, $sectionsTree);
                }

                if ($section['RELATIVE_DEPTH_LEVEL'] == 4) {
                    $sectionsTree = $this->putSectionFourthLevelInTree($section, $sectionsTree);
                }
            }
        } /*elseif($sections[0]['RELATIVE_DEPTH_LEVEL'] == 2) {
            foreach ($sections as $section) {
                if ($section['RELATIVE_DEPTH_LEVEL'] == 2) {
                    $sectionsTree[$section['ID']] = $section;
                    continue;
                }

                if ($section['RELATIVE_DEPTH_LEVEL'] == 3) {
                    $sectionsTree[$section['IBLOCK_SECTION_ID']]['CHILD'][$section['ID']] = $section;
                    continue;
                }

                if ($section['RELATIVE_DEPTH_LEVEL'] == 4) {
                    $sectionsTree = $this->putSectionThirdLevelInTree($section, $sectionsTree);
                }
            }
        }*/

        return $sectionsTree;
    }

    //Третий уровень разделов
    protected function putSectionThirdLevelInTree($section, $sectionsTree)
    {
        foreach ($sectionsTree as $key => $rootSection) {
            if (array_key_exists($section['IBLOCK_SECTION_ID'], $rootSection['CHILD'])) {
                $sectionsTree[$key]['CHILD'][$section['IBLOCK_SECTION_ID']]['CHILD'][$section['ID']] = $section;
            }
        }

        return $sectionsTree;
    }

    //4-й уровень разделов
    protected function putSectionFourthLevelInTree($section, $sectionsTree)
    {
        foreach ($sectionsTree as $keySection => $mainSection) {
           foreach ($mainSection['CHILD'] as $key => $childSection) {
               if (array_key_exists($section['IBLOCK_SECTION_ID'], $childSection['CHILD'])) {
                   $sectionsTree[$keySection]['CHILD'][$key]['CHILD'][$section['IBLOCK_SECTION_ID']]['CHILD'][$section['ID']] = $section;
               }
           }
        }

        return $sectionsTree;
    }

}