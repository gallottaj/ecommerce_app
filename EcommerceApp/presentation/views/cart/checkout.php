<?php

// joey gallotta
// cst-236
include "../../../header.php";
$productBusinessService = new ProductBusinessService();
$userBusinessService = new UserBusinessService();

?>

<div class="container my-3 my-md-5">
	<div class="row">
		<div class="col-md-4 order-md-2 mb-4">
			<h4 class="d-flex justify-content-between align-items-center mb-3">
				<span class="text-muted">Cart:</span>
				<!-- <span class="badge badge-secondary badge-pill">3</span> -->
			</h4>

			<!-- 			display products -->
			<ul class="list-group mb-3">
				<li
					class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<small class="text-muted">Toy Robot</small>
					</div> <span class="text-muted">$10</span> <!-- 				</li> --> <!-- 				<li -->
					<!-- 					class="list-group-item d-flex justify-content-between lh-condensed"> -->
					<!-- 					<div> --> <!-- 						<small class="text-muted">Brief description</small> -->
					<!-- 					</div> <span class="text-muted">$5</span> --> <!-- 				</li> -->
				
				<li
					class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<small class="text-muted">Total</small>
					</div> <span class="text-muted">$10</span>
				</li>
			</ul>
			<hr class="mb-4">

			<h4 class="mb-3">Payment</h4>

			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<!-- <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required> -->
					<input id="credit" name="paymentMethod" type="radio"
						class="custom-control-input" checked> <label
						class="custom-control-label" for="credit">Credit card</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="cc-name">Full Name</label>
					<!-- <input type="text" class="form-control" id="cc-name" placeholder="" required> -->
					<input type="text" class="form-control" id="cc-name" placeholder="">
				</div>
				<div class="col-md-6 mb-3">
					<label for="cc-number">Card Number</label>
					<!-- <input type="text" class="form-control" id="cc-number" placeholder="" required> -->
					<input type="text" class="form-control" id="cc-number"
						placeholder="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3">
					<label for="cc-expiration">Exp.</label>
					<!-- <input type="text" class="form-control" id="cc-expiration" placeholder="" required> -->
					<input type="text" class="form-control" id="cc-expiration"
						placeholder="">
				</div>
				<div class="col-md-3 mb-3">
					<label for="cc-cvv">CVV</label>
					<!-- <input type="text" class="form-control" id="cc-cvv" placeholder="" required> -->
					<input type="text" class="form-control" id="cc-cvv" placeholder="">
				</div>
			</div>
			<hr class="mb-4">
		</div>
	</div>


	<div class="col-md-8 order-md-1">
		<h4 class="mb-3">Billing address</h4>
		<form action="../../handlers/cart/checkoutHandler.php" class="">
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">First Name</label>
					<!-- <input type="text" class="form-control" id="firstName" placeholder="" value="" required> -->
					<input type="text" class="form-control" id="firstName"
						placeholder="" value="">
				</div>
				<div class="col-md-6 mb-3">
					<label for="lastName">Last Name</label>
					<!-- <input type="text" class="form-control" id="lastName" placeholder="" value="" required> -->
					<input type="text" class="form-control" id="lastName"
						placeholder="" value="">
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Phone <span class="text-muted">(optional)</span></label>
				<input type="email" class="form-control" id="email"
					placeholder="name@example.com">
			</div>

			<div class="mb-3">
				<label for="address">Address</label>
				<!-- <input type="text" class="form-control" id="address" placeholder="1234 Main St" required> -->
				<input type="text" class="form-control" id="address"
					placeholder="1234 Main St">
			</div>

			<div class="mb-3">
				<label for="address2">Address 2 <span class="text-muted">(optional)</span></label>
				<input type="text" class="form-control" id="address2"
					placeholder="Apartment or suite">
			</div>

			<div class="row">
				<div class="col-md-5 mb-3">
					<label for="country">Country</label>
					<!-- <select class="custom-select d-block w-100" id="country" required> -->
					<select class="custom-select d-block w-100" id="country">
						<option value="">Choose...</option>
						<option>United States</option>
					</select>
				</div>
				<div class="col-md-4 mb-3">
					<label for="state">State</label>
					<!-- <select class="custom-select d-block w-100" id="state" required> -->
					<select class="custom-select d-block w-100" id="state">
						<option value="">Choose...</option>
						<option>California</option>
					</select>
				</div>
				<div class="col-md-3 mb-3">
					<label for="zip">Zip Code</label>
					<!-- <input type="text" class="form-control" id="zip" placeholder="" required> -->
					<input type="text" class="form-control" id="zip" placeholder="">
					<!-- 					<br></br> -->
				</div>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input"
					id="same-address"> <label class="custom-control-label"
					for="same-address">Shipping address same as billing address</label>
				<hr class="mb-4">

				<!-- 			COUPON CODE -->

				<label for="coupon">Have a coupon? Enter it below!</label>
				<form class="card p-2"
					action="../../Handlers/cart/couponFormHandler.php" method="POST">
					<div class="input-group">
						<input type="text" class="form-control" id="promo-code"
							name="promo-code" placeholder="Coupon">
						<div class="input-group-append">
							<br></br>
							<button type="submit" class="btn btn-secondary">Redeem</button>
						</div>
					</div>
				</form>


				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">Complete
					Checkout</button>

			</div>