<?php

//cst-236 milestone
//joey gallotta

include 'header.php';

?>
<div class="container-fluid pt-4 d-flex justify-content-center">
	<form style="width: 24rem" class="card px-4 py-3"
		action="Handlers/Admin/editProductHandler.php?id=<?= $prod_id ?>"
		method="POST">
		<div class="mb-3">
			<label for="ProductID" class="form-label">ID: <?= $prod_id ?></label>
			<input type="hidden" class="form-control" id="ProductID"
				name="ProductID" value="<?= $prod_id  ?>" />
		</div>
		<div class="mb-3">
			<label for="ProductName" class="form-label">Name: </label> <input
				type="text" class="form-control" id="ProductName" name="ProductName"
				value="<?= $prod_name ?>" />
		</div>
		<div class="mb-3">
			<label for="ProductDescription" class="form-label"> Description: </label>
			<input type="text" class="form-control" id="ProductDescription"
				name="ProductDescription" value="<?= $prod_desc ?>" />
		</div>
		<div class="mb-3">
			<label for="ProductPrice" class="form-label">Price: </label> <input
				type="text" class="form-control" id="ProductPrice"
				name="ProductPrice" value="<?= $prod_price ?>" />
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?
include 'footer.php';