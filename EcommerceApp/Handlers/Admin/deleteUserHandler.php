<?php

//cst-236 milestone
//joey gallotta

require_once '../header.php';

$id = $_GET['id'];

$service = new UserBusinessService();

if ($service->deleteUserWithId($id)) {
    header("Location: ../../users.php");
} else {
    header("Location: ../../users.php");
}

?>