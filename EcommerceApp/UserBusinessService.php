<?php

class UserBusinessService
{

    // register new user
    function registerNewUser($firstName, $lastName, $username, $password, $role)
    {
        $service = new UserDataService();
        $service->registerNewUser($firstName, $lastName, $username, $password, $role);
    }

    // show all users
    function getAllUsers()
    {
        $dataService = new UserDataService();
        return $dataService->getAllUsers();
    }

    // find by user ID
    function findUserByID($id)
    {
        $service = new UserDataService();

        return $service->findUserByID($id);
    }

    // find by username
    function findUserByUsername($username)
    {
        $service = new UserDataService();

        return $service->findUserByUsername($username);
    }

    // delete user
    function deleteUserWithId($id)
    {
        $dataService = new UserDataService();
        return $dataService->deleteUserWithId($id);
    }

    // edit user
    function editUser($id, $firstName, $lastName, $username, $role)
    {
        $dataService = new UserDataService();
        return $dataService->editUser($id, $firstName, $lastName, $username, $role);
    }
}

?>