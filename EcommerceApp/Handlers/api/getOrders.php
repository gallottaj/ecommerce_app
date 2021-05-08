<?php

//cst-236 milestone
//joey gallotta

include '../../../autoloader.php';

$date1 = $_GET['date1'];
$date2 = $_GET['date2'];

$ordersBusinessService = new OrderBusinessService();

// get all orders
if (! $date1 && ! $date2) {
    $orders = $ordersBusinessService->getAllOrders();

    if ($orders == null) {
        echo "No orders found. <br>";
        exit();
    }

    echo json_encode($orders);
} // get users by id
else if ($date1 && $date2) {

    $orders = $ordersBusinessService->getOrderBetweenDates($date1, $date2);

    if ($orders == null) {
        echo "No orders found. <br>";
        exit();
    }

    echo json_encode($orders);
}

?>