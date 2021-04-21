<?php

// cst-236 milestone
// joey gallotta

include 'header.php';

?>
<title>Add Product</title>
<div class="container-fluid pt-4 d-flex justify-content-center">
	<form style="width: 24rem" class="card px-4 py-3"
		action="../Handlers/Admin/addProductHandler.php" method="POST">
		<div class="mb-3">
			<label for="ProductName" class="form-label">Name: </label> <input
				type="text" class="form-control" id="ProductName" name="ProductName" />
		</div>
		<div class="mb-3">
			<label for="ProductDescription" class="form-label"> Description: </label>
			<input type="text" class="form-control" id="ProductDescription"
				name="ProductDescription" />
		</div>
		<div class="mb-3">
			<label for="ProductPrice" class="form-label">Price: </label> <input
				type="text" class="form-control" id="ProductPrice"
				name="ProductPrice" />
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php
include 'footer.php';

?>
