<?php
require_once 'Database.php';

class UserDataService
{

    function findByFirstName($n)
    {
        $db = new Database();

        // testing
        echo "testing db<br>";
        print_r($db);

        echo "<br> I am searching for " . $n . "<br>";

        $sql_query = "SELECT first_name, last_name, username, password, role FROM users  WHERE first_name LIKE '%$n%'";

        $connection = $db->getConnection();
        $result = $connection->query($sql_query);

        if (! $result) {
            echo "assume the SQL statement has an error";
            exit;
        }

        if ($result->num_rows == 0) {
            return null;
        } else {
            return "I found " . $result->num_rows . " results! <br>";
        }
    }
    
    function registerNewUser($firstName, $lastName, $username, $password, $role)
    {
        
        //if (!$this->findByFirstName($n)) {
        
            $db = new Database();
           
            
            echo "<br>ADDING USER";
            echo "<br>FirstName: $firstName";
            echo "<br>LastName: $lastName";
            echo "<br>USERNAME: $username";
            echo "<br>PASSWORD: $password";
            echo "<br>Role: $role";
            
            
            $sql_query = "INSERT INTO users (first_name, last_name, username, password, role) VALUES ('$firstName', '$lastName', '$username', '$password', '$role')";
            
            $connection = $db->getConnection();
            $result = $connection->query($sql_query);
        }
    }
?>