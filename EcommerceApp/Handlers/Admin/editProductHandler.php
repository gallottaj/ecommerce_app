<?php

//cst-236 milestone
//joey gallotta

require_once '../../header.php';

$id = $_POST['ProductID'];
$name = $_POST['ProductName'];
$desc = $_POST['ProductDescription'];
$price = $_POST['ProductPrice'];

$service = new ProductBusinessService();

if ($service->editProduct($id, $name, $desc, $price)) {
    header("Location: Admin/viewProductHandler.php?id=$id");
} else {

    header("Location: Admin/viewProductHandler.php?id=$id");
}

?>