<?php

namespace Local\Models;

use CFile;


class ProductParametersType1 {

    protected $paramsProps = [
        [
            'TITLE' => 'COLOR_TITLE',
            'ITEMS' => 'CHANGE_COLOR'
        ]
    ];

    protected $productProps;


    public function __construct($productProperties)
    {
        $this->productProps = $productProperties;
    }

    public function getParams()
    {
        $params = [];

        foreach ($this->paramsProps as $paramProps) {
            $params[] = $this->getParamsGroup($paramProps);
        }

        return $params;
    }

    protected function getParamsGroup($paramProps)
    {
        $titlePropCode = $paramProps['TITLE'];
        $itemsPropCode = $paramProps['ITEMS'];
        
        return [
            'ID'                => $this->productProps[$titlePropCode]['ID'],
            'NAME'              => $this->productProps[$titlePropCode]['VALUE'],
            'CHANGE_MAIN_PHOTO' => false, //todo добавить свойство в админке, привязать его в $paramsProps. Если отмечено, должно при клике на свойство менять фото.
            'ITEMS'             => $this->getGroupItems($this->productProps[$itemsPropCode])
        ];
    }

    protected function getGroupItems($property)
    {
        $items = [];

        foreach ($property['VALUE'] as $index => $fileID) {
            //$items[] = $this->getParamsGroupItem();

            $items[] = [
                'NAME' => $this->getItemName($property['DESCRIPTION'][$index]), //todo реализовать таким образом, чтоб, если неуказано имя файла в битриксе, оно тянулось из загружаемого имени
                'PRICE' => $this->getItemPrice($property['DESCRIPTION'][$index]),
                'IMG' => CFile::GetPath($fileID), //todo resize
                'CODE' => $fileID //todo проверить, может ли код свойства быть одинаковым
            ];
        }

        return $items;
    }

    protected function getParamsGroupItem()
    {

    }

    protected function getItemName($dirtyName)
    {
        return $dirtyName; //todo реализовать метод
    }

    protected function getItemPrice($dirtyName)
    {
        return 200; //todo реализовать метод
    }
}
