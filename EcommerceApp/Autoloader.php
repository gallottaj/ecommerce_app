<?php
// runs any time there is a required object reference
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});
?>