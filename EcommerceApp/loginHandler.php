<?php
require_once 'header.php';
require_once 'Autoloader.php';
// require_once 'SecurityService.php';

$attemptedLoginUsername = $_POST['Username'];
$attemptedLoginPassword = $_POST['Password'];

// echo "You tried to login with " . $attemptedLoginUsername . " and " . $attemptedLoginPassword;

$service = new SecurityService($attemptedLoginUsername, $attemptedLoginPassword);

$loggedIn = $service->authenticate();

if ($loggedIn) {
    $_SESSION['principal'] = true;
    // include "loginPassed.php";
} else {
    $_SESSION['principal'] = false;
    // include "loginFailed.php";
}

?>

<h1>Welcome, Admin!</h1>

What would you like to do?
<br>
<br>
<a href="products.php">View All Products</a>
<br>
<a href="Admin/addProduct.php">Add Product</a>
<br>
<a href="Admin/editProduct.php">Edit Product</a>
<br>
<a href="Admin/deleteProduct.php">Delete Product</a>
<br>
<br>
<a href="Admin/userTable.php">View All Users</a>
<br>
<a href="Admin/editUser.php">Edit User</a>
<br>
<a href="Admin/deleteUser.php">Delete User</a>