<?

namespace Local\Controllers;

use Bitrix\Main\Loader;
use Bitrix\Catalog\Product\Basket;
use Bitrix\Sale;

class CartController extends SlimController {

    public function __construct($container)
    {
        parent::__construct($container);

        Loader::includeModule('sale');
        Loader::includeModule('catalog');
        Loader::includeModule('iblock');
    }

    public function addProductToCart($request, $response)
    {
        $basket = \Bitrix\Sale\Basket::loadItemsForFUser(
            \Bitrix\Sale\Fuser::getId(),
            \Bitrix\Main\Context::getCurrent()->getSite()
        );

        $props = [
            [
                'NAME' => 'Демо свойство',
                'CODE' => 'XXX',
                'VALUE' => 'Значение',
            ]
        ];

        if ($item = $basket->getExistsItem('catalog', $this->params['id'], $props)){
            $item->setField('QUANTITY', $item->getQuantity() + $this->params['quantity']);
        } else {
            $item = $basket->createItem('catalog', $this->params['id']);
            $item->setFields([
                'QUANTITY' => $this->params['quantity'],
                'CURRENCY' => \Bitrix\Currency\CurrencyManager::getBaseCurrency(),
                'NAME' => 'test name', //если устанавливаем цену, требуется имя
                'PRICE' => 200,
                'CUSTOM_PRICE' => 'Y',
            ]);

            //Add props
            $collection = $item->getPropertyCollection();

            $prop = $collection->createItem();
            $prop->setFields([
                'NAME' => 'Новое свойство',
                'CODE' => 'XXX',
                'VALUE' => 'Значение',
            ]);
        }

        $basket->save();
        
        //return $response->withJson(['success' => $res->get]);
    }
}