<?php

class UserBusinessService
{

    function registerNewUser($firstName, $lastName, $username, $password, $role)
    {
        $service = new UserDataService();
        $service->registerNewUser($firstName, $lastName, $username, $password, $role);
    }
}

?>