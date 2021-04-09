<?php

class ProductBusinessService
{

    // returns an array ALL products
    function getAllProducts()
    {
        $dataService = new ProductDataService();
        return $dataService->getAllProducts();
    }

    function searchByNameOrDescription($searchQueryString)
    {
        $dataService = new ProductDataService();
        return $dataService->searchByNameOrDescription($searchQueryString);
    }
}
?>