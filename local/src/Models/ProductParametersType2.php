<?php

namespace Local\Models;

use Local\Models\Iblock\Elements;
use CFile;

class ProductParametersType2 {

    protected $paramsProps = [
        [
            'TITLE' => 'OBIV_TITLE',
            'TITLE_CUSTOM' => 'OBIV_TITLE_TEXT',
            'NAME_AND_PRICE' => 'O_TITLE1',
            'ITEMS_SOURCE_PROPERTIES' => [
                'O_PIC0', 'O_PIC1', 'O_PIC2', 'O_PIC3', 'O_PIC4', 'O_PIC5', 'O_PIC6'
            ]
        ]
    ];

    protected $productProps;

    protected $materialProp = 'PHOTO';

    public function __construct($productProperties)
    {
        $this->productProps = $productProperties;
    }


    public function getParams()
    {
        $params = [];

        foreach ($this->paramsProps as $paramProps) {
            $params[] = $this->getParamBlock($paramProps);
        }

        return $params;
    }

    /**
     * Возвращает блок параметров. http://joxi.ru/YmEGJeYSJj8ZDA
     */
    protected function getParamBlock($paramProps)
    {
        return [
            'NAME' => $this->getBlockName($paramProps),
            'GROUPS' => $this->getBlockGroups($paramProps),
        ];
    }

    /**
     * Возвращает группу блока параметров. http://joxi.ru/D2PGJRESkY0p8m
     *
     * Массив вида:
     * [
     *    [
     *      NAME => ''
     *      PRICE => '',
     *      ITEMS => [
     *          IMG => '',
     *          NAME => '',
     *          CODE => ''
     *      ]
     *    ],
     *    ...
     * ]
     */
    protected function getBlockGroups($paramProps)
    {
        $blockGroups = [];

        foreach ($paramProps['ITEMS_SOURCE_PROPERTIES'] as $index => $sourceProperty) {
            $prop = $this->productProps[$sourceProperty];

            if (!$prop['VALUE']) {
                continue;
            }

            $blockGroups[] = [
                'NAME' => $this->getBlockGroupName($paramProps, $index),
                'PRICE' => $this->getBlockGroupPrice($paramProps, $index),
                'ITEMS' => $this->getBlockGroupItems($prop['VALUE'])
            ];
        };

        return $blockGroups;
    }


    //todo доделать
    protected function getBlockName($paramProps)
    {
        $paramProps['TITLE'];
        $paramProps['TITLE_CUSTOM'];

        return 'test';
    }

    protected function getBlockGroupName($paramProps, $index)
    {
        return $this->productProps[$paramProps['NAME_AND_PRICE']]['VALUE'][$index];
    }

    protected function getBlockGroupPrice($paramProps, $index)
    {
        return $this->productProps[$paramProps['NAME_AND_PRICE']]['DESCRIPTION'][$index];
    }


    /**
     * http://joxi.ru/brRGJOjSY4KJem
     *
     * @param $elementsID - http://joxi.ru/krDGJe4SJ3NQPA
     */
    protected function getBlockGroupItems($elementsID)
    {
        $el = new Elements();
        $el->filter(['ID' => $elementsID]);
        $elements = $el->get();
        $elements = $this->elementsSort($elementsID, $elements);

        $items = [];

        foreach ($elements as $element) {
            $items = array_merge($items, $this->getBlockGroupItemsFromElement($element['PROPERTIES']['PHOTO']));
        }

        return $items;
    }

    /**
     * http://joxi.ru/brRGJOjSY4KJem
     *
     * @param $itemImagesProp
     */
    protected function getBlockGroupItemsFromElement($itemImagesProp)
    {
        $items = [];

        foreach ($itemImagesProp['VALUE'] as $index => $image) {
            $imagePath = CFile::getPath($image); //todo ресайз картинки

            $items[] = [
                'NAME' => $itemImagesProp['DESCRIPTION'][$index],
                'IMG'  => $imagePath,
                'CODE' => $image
            ];
        }

        return $items;
    }

    //todo реализовать сортировку по $orderElementsIds (чтоб было отсортировано по тому, как добавлено в админку)
    protected function elementsSort($orderElementsIds, $elements)
    {
        return $elements;
    }
}
