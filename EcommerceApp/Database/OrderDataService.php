<?php

// joey gallotta
// cst-236

class OrderDataService
{

    function addOrdersLine($order, $conn)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $stmt = $conn->prepare("INSERT INTO orders (ID, DATE, USER_ID ADDRESS_ID) VALUES ");

        $order_id = $order->getId();
        $order_date = $order->getDate();
        $user_id = $order->getUser_Id();
        $user_address_id = $order->getAddress_id();
        $order_total = $order->getTotal();

        // bind params to the sql statement
        $stmt->bind_param($order_date, $user_address_id, $user_id, $order_total);

        if (! $stmt) :
            echo 'sql error?';
            exit();
    endif;

        echo 'order date: ' . $order_date . ' userid: ' . $user_id . ' user address id: ' . $user_address_id . ' order_total: ' . $order_total;

        echo '</br> </br>';
        print_r($stmt);

        echo '</br> </br>';
        $stmt->execute();

        // get results
        if ($stmt->affected_rows > 0) {
            echo 'inserted into db';
            return $conn->insert_id;
        } else {
            echo 'nothing inserted into db';
            return false;
        }
    }

    function addDetailsLine($order_id, $orderDetails, $conn)
    {

        // return the id number of the last item inserted.
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $stmt = $conn->prepare("INSERT INTO order_details (ORDER_ID, PRODUCT_ID, QUANTITY, SUBTOTAL, TOTAL) VALUES ");

        if (! $stmt) {
            echo "sql error?";
            return - 1;
        } else {
            $product_id = $orderDetails->getProduct_id();
            $quantity = $orderDetails->getQuantity();
            $price = $orderDetails->getCurrent_price();
            $description = $orderDetails->getCurrent_description();

            $stmt->bind_param($order_id, $product_id, $quantity, $price, $description);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // success
                return $conn->insert_id;
            } else {
                // failed
                return false;
            }
        }
    }

    // return all orders in the database
    function getAllOrders()
    {}

    // deletes an order item from the database
    function deleteItem($orderId)
    {}

    // return a specific order
    function findById($id)
    {}

    // updates an order
    function updateOne($id, $order)
    {}

    // gets the order details with id of $id
    function getOrderDetails($id)
    {}
}

?>