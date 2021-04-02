<?php
require_once 'Database.php';

class UserDataService
{

    function findUserByUsername($username)
    {
        $database = new Database();

        echo "testing the db data<br>";
        print_r($database);
    }
}
?>