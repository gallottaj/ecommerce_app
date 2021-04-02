<?php
require_once 'header.php';
require_once 'Autoloader.php';
//require_once 'SecurityService.php';

$attemptedLoginUsername = $_POST['Username'];
$attemptedLoginPassword = $_POST['Password'];

echo "You tried to login with " . $attemptedLoginUsername . " and " . $attemptedLoginPassword;

$service = new SecurityService($attemptedLoginUsername, $attemptedLoginPassword);

$loggedIn = $service->authenticate();

if ($loggedIn) {
    $_SESSION['principal'] = true;
    include "loginPassed.php";
} else {
    $_SESSION['principal'] = false;
    include "loginFailed.php";
}

?>