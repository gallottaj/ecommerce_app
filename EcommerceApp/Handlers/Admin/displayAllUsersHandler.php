<?php

//cst-236 milestone
//joey gallotta

// new instance of business service
$bs = new UserBusinessService();

// return all users in array
$users = $bs->getAllUsers();

if ($users) {
    include '../../Admin/displayUserSearchResults.php';
} else {
    echo 'no results found';
}

?>