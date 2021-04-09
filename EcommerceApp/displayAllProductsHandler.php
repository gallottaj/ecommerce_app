<?php 
//new instance of the business service
$bs = new ProductBusinessService();

//return array of products
$products = $bs->getAllProducts();

if ($products) {
//display results
    include 'productSearchResponse.php';
} else {
    echo 'no results';
}

?>