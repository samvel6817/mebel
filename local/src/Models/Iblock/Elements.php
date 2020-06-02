<?

namespace Local\Models\Iblock;

class Elements extends DataManipulation {

    protected $select             = ['*', 'PROPERTY_*'];
    protected $getPreviewImageScr = false;


    public function get($returnOnlyField = false, $resKey = false)
    {
        $rsElements = $this->bGetList();

        while ($ob = $rsElements->GetNextElement()) {
            $arItem = $ob->GetFields();

            if ($returnOnlyField) {
                $arResult[] = $arItem[$returnOnlyField];
                continue;
            }

            $arItem['PROPERTIES'] = $ob->GetProperties();

            $arItem = $this->setPreviewPicture($arItem);

            if ($resKey) {
                $arResult[$arItem[$resKey]] = $arItem;
            } else {
                $arResult[] = $arItem;
            }


        }

        return $arResult;
    }

    public function first($returnOnlyField = false)
    {
        $rsElements = $this->bGetList();

        while ($ob = $rsElements->GetNextElement()) {
            $arItem               = $ob->GetFields();
            $arItem['PROPERTIES'] = $ob->GetProperties();

            if ($returnOnlyField) {
                if (strpos($returnOnlyField, '.') === false) {
                    return $arItem[$returnOnlyField];
                }

                foreach (explode('.', $returnOnlyField) as $segment) {
                    $arItem = $arItem[$segment];
                }

                return $arItem;
            }

            return $arItem;
        }
    }

    public function propInFirst($propCode)
    {
        $rsElements = $this->bGetList();

        while ($ob = $rsElements->GetNextElement()) {
            $arItem['PROPERTIES'] = $ob->GetProperties();

            return prop_val($arItem, $propCode);
        }
    }

    public function getByID($id, $returnOnlyField = false)
    {
        $this->filter = ['ID' => $id];
        return is_array($id) ? $this->get($returnOnlyField) : $this->first($returnOnlyField);
    }

    public function setGetPreviewImageSrc($getPreviewImageScr)
    {
        $this->getPreviewImageScr = $getPreviewImageScr;
    }

    private function setPreviewPicture($item)
    {
        if (!$this->getPreviewImageScr) {
            return $item;
        }

        $item['PREVIEW_PICTURE'] = \CFile::getPath($item['PREVIEW_PICTURE']);

        return $item;
    }

    private function bGetList()
    {
        return \CIBlockElement::GetList(
            $this->sort,
            $this->filter,
            false,
            $this->pagination,
            $this->select
        );
    }
}