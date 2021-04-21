<?php

//cst-236 milestone
//joey gallotta

require_once '../header.php';

$id = $_GET['id'];

$service = new ProductBusinessService();

if ($service->deleteProductWithId($id)) {
    header("Location: ../../products.php");
} else {

    header("Location: ../../products.php");
}

?>