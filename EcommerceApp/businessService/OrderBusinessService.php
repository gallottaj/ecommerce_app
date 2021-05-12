<?php

// joey gallotta
// cst-236

class OrderBusinessService
{

    function checkOut($order, $cart)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $conn->autocommit(FALSE);
        $conn->begin_transaction();

        $orderDataService = new OrderDataService();
        $productBusinessService = new ProductBusinessService();

        $orderID = $this->addOrdersLine($order, $conn);

        foreach ($cart->getItems() as $product_id => $qty) {

            $product = $productBusinessService->getProductByID($product_id);

            $orderDetails = new OrderDetails($orderID, $product_id, $qty, ($qty * $product->getPrice()));
            $details = $this->addDetailsLine($orderID, $orderDetails, $conn);
        }

        if ($orderID && $details) {
            $conn->commit();
        } else {
            $conn->rollback();
        }

        $conn->close();
    }

    function addOrdersLine($order, $conn)
    {
        $dataService = new OrderDataService();

        return $dataService->addOrdersLine($order, $conn);
    }

    function addDetailsLine($order_id, $orderDetails, $conn)
    {
        $dataService = new OrderDataService();

        return $dataService->addDetailsLine($order_id, $orderDetails, $conn);
    }

    // return all orders in the db
    function getAllOrders()
    {
        $dataService = new OrderDataService();

        return $dataService->getAllOrders();
    }

    // deletes an order item from db
    function deleteItem($orderId)
    {
        $dataService = new OrderDataService();

        return $dataService->deleteItem($orderId);
    }

    // returns specific order
    function findById($id)
    {
        $dataService = new OrderDataService();

        return $dataService->findById($id);
    }

    // updates the order
    function updateOne($id, $order)
    {
        $dataService = new OrderDataService();

        return $dataService->updateOne($id, $order);
    }

    // gets the order details with id
    function getOrderDetails($id)
    {
        $dataService = new OrderDataService();

        return $dataService->getOrderDetails($id);
    }

    // gets the orders between two dates
    function getOrderBetweenDates($date1, $date2)
    {
        $dataService = new OrderDataService();

        return $dataService->getOrderBetweenDates($date1, $date2);
    }

    // applies coupon code
    function applyCouponCode($code)
    {
        $dataService = new OrderDataService();

        return $dataService->applyCouponCode($code);
    }
}

?>