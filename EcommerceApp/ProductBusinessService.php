<?php

class ProductBusinessService
{

    // returns all products
    function getAllProducts()
    {
        $dataService = new ProductDataService();
        return $dataService->getAllProducts();
    }

    // search by name or description
    function searchByNameOrDescription($searchQueryString)
    {
        $dataService = new ProductDataService();
        return $dataService->searchByNameOrDescription($searchQueryString);
    }

    // add new product
    function addProduct($name, $desc, $price)
    {
        $dataService = new ProductDataService();
        return $dataService->addProduct($name, $desc, $price);
    }

    // get product by ID
    function getProductByID($prod_id)
    {
        $dataService = new ProductDataService();
        return $dataService->getProductByID($prod_id);
    }

    // edit product
    function editProduct($id, $name, $desc, $price)
    {
        $dataService = new ProductDataService();
        return $dataService->editProduct($id, $name, $desc, $price);
    }

    // delete product
    function deleteProductWithId($id)
    {
        $dataService = new ProductDataService();
        return $dataService->deleteProductWithId($id);
    }
}
?>