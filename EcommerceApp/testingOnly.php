<?php 
require_once 'UserDataService.php';
$u = new UserDataService();
echo $u->findByFirstName("Mark");

?>