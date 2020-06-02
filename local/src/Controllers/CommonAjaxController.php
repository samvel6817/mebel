<?php

namespace Local\Controllers;

use Local\Models\SearchHint;

class CommonAjaxController extends SlimController {

    public function searchHint($request, $response)
    {
        $searchHint = new SearchHint();
        $products = $searchHint->getElements($request->getQueryParam('query'));

        include __DIR__ . '/../includes/search-hint.php';
    }

}