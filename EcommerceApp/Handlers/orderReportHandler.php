<?php
// cst-236 milestone
// joey gallotta
$orderBusinessService = new OrderBusinessService();

$orders = $orderBusinessService->getOrderBetweenDates($date1, $date2);

?>