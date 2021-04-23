
<?php
require_once '../../header.php';

$prod_id = $_GET['id'];

if (isset($_SESSION['cart'])) {
    $c = $_SESSION['cart'];
} else {
    if (isset($_SESSION['userid'])) {
        $c = new cartModel($_SESSION['userid']);
    } else {
        echo "please login first <br>";
        exit();
    }
}

$c->addItem($prod_id);
$_SESSION['cart'] = $c;

?>