<?php
// joey gallotta
// cst-236
require_once '../../../header.php';

if (isset($_SESSION['userid']) && isset($_SESSION['cart'])) {
    $userid = $_SESSION['userid'];
    $cart = $_SESSION['cart'];

    echo $userid;
    print_r($cart);
    echo '</br> </br>';

    $ordersBusinessService = new OrderBusinessService();
    $order = new Order($userid, 9, $cart->getTotal_price());
    $ordersBusinessService->checkOut($order, $cart);

    echo $userid;
    print_r($cart);
    echo '</br> </br>';

    $ordersBusinessService = new OrderBusinessService();
    $order = new Order($userid, 9, $cart->getTotal_price());
    if ($ordersBusinessService->checkOut($order, $cart)) {
        $_SESSION['cart'] = new Cart($_SESSION['userid']);
        header("Location: ../../views/cart/successfulOrder.php");
    }
    ;
}

?>