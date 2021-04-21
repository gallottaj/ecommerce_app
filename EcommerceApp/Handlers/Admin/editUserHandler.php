<?php

//cst-236 milestone
//joey gallotta

require_once '../../header.php';

$id = $_POST['ID'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$username = $_POST['Username'];
$role = $_POST['Role'];

$service = new UserBusinessService();

if ($service->editUser($id, $firstName, $lastName, $username, $role)) {
    header("Location: ../../users.php");
} else {

    header("Location: ../../users.php");
}

?>