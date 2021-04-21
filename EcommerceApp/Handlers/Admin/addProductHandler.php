<?php

//cst-236 milestone
//joey gallotta

require_once '../../header.php';

$prod_name = $_POST['ProductName'];
$prod_desc = $_POST['ProductDescription'];
$prod_price = $_POST['ProductPrice'];

$service = new ProductBusinessService();

echo "product added!";
$service->addProduct($prod_name, $prod_desc, $prod_price);

?>