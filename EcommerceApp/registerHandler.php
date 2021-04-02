<?php
$attemptedRegisterFirstName = $_POST['FirstName'];
$attemptedRegisterLastName = $_POST['LastName'];
$attemptedRegisterUsername = $_POST['Username'];
$attemptedRegisterPassword = $_POST['Password'];
$attemptedRegisterRole = 0;

switch ($_POST['Role']) {
    case 'premium':
        $attemptedRegisterRole = 2;
        break;
    case 'employee':
        $attemptedRegisterRole = 3;
        break;
    case 'admin':
        $attemptedRegisterRole = 4;
        break;
    default:
        $attemptedRegisterRole = 1;
        break;
}

$service = new UserBusinessService();
echo 'hi';
$service->registerNewUser($attemptedRegisterFirstName, $attemptedRegisterLastName, $attemptedRegisterUsername, $attemptedRegisterPassword, $attemptedRegisterRole);
?>