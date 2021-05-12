<?php

// joey gallotta
// cst-236

require_once '../../header.php';

$orderBusinessService = new OrderBusinessService();
$code = $_POST['coupon-code'];

$orderBusinessService->applyCouponCode($code);

header("Location: ../../views/cart/checkout.php");

?>