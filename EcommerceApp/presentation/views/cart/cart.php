<?php

// cst-236 milestone
// joey gallotta
include '../../../header.php';

$productBusinessService = new ProductBusinessService();
$userBusinessService = new UserBusinessService();

// checks if there are any items in cart
if (isset($_SESSION['cart'])) {
$c = $_SESSION['cart'];
} else {
?>

<!-- <p>Cart is Empty.</p> -->

<?php
exit();

// verify the user is logged in using user id
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
} else {
    echo 'Please log in or create an account. <br>';
    exit();
}

// verify the cart belongs to the user
if ($c->getUserid() != $userid) {
    echo 'Cart error.';
    exit();
}

?>



<div class="container">
	<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
		<div class="col-md-6 col-lg-8 px-0">
			<h1 class="display-4 fst-italic">Shopping Cart</h1>
		</div>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Product</th>
				<th scope="col">Description</th>
				<th scope="col">Price</th>
				<th scope="col">Quantity</th>
				<th scope="col">Subtotal</th>
			</tr>
		</thead>
		<tr>
			<th scope="col">1</th>
			<th scope="col">toy</th>
			<th scope="col">robot</th>
			<th scope="col">25</th>
			<th scope="col">1</th>
			<th scope="col">25</th>
		</tr>

		<tbody>
      <?php

    $index = 1;
    foreach ($c->getItems() as $product_id => $qty) {
        $product = $productBusinessService->getProductByID($product_id);
        include 'cartItemTable.php';
        $index ++;
    }

    ?>

      <!-- print total -->
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th scope="col">Total:</th>
				<td><?= $c->getTotal_price() ?></td>
			</tr>

		</tbody>
	</table>
</div>







<?php
include '../../../footer.php';
?>