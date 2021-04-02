<?php
require_once 'header.php';

class SecurityService
{

    private $username = "";

    private $password = "";

    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate()
    {
        if ($this->password == " " || $this->username == "") {
            return false;
        }
        if ($this->password == "secretpw" && $this->username == "joey") {
            return true;
        } else {
            return false;
        }
    }
}
?>