<?php 
class ProductBusinessService
{
    
    //returns all products
    function getAllProducts()
    {
        //$dataService = new ProductDataService();
        return $dataService->getAllProducts();
    }
    
    function searchByNameOrDescription($searchQueryString)
    {
        //$dataService = new ProductDataService();
        return $dataService->searchByNameOrDescription($searchQueryString);
    }
}
?>