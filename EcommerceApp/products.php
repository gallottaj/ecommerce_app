<?php

// cst-236 milestone
// joey gallotta

include 'header.php';
include 'displayAllProductsHandler.php';
include 'footer.php';

?>

<tr>
	<td class="prod-id"><?php echo $products[$i]['ID']; ?></td>
	<td class="prod-name"> <?php echo $products[$i]['PRODUCT_NAME']; ?></td>
	<td class="prod-desc"> <?php echo $products[$i]['PRODUCT_DESCRIPTION']; ?>
      <? include 'views/presentation/productTableItem.php'; ?>
    </td>
	<td class="prod-price"><?php echo $products[$i]['PRICE']; ?></td>
	<a class="btn btn-outline-primary btn-sm"
		href="presentation/views/cart/cart.php" class="product-form-submit">ADD
		TO CART</a>
	</div>
	</div>

</tr>