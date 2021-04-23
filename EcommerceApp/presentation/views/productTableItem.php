
<tr>
	<td class="prod-id"><?php echo $products[$i]['ID']; ?></td>
	<td class="prod-name"> <?php echo $products[$i]['PRODUCT_NAME']; ?></td>
	<td class="prod-desc"> <?php echo $products[$i]['PRODUCT_DESCRIPTION']; ?>
      <? include 'presentation/views/productTableItem.php'; ?>
    </td>
	<td class="prod-price">$<?php echo $products[$i]['PRICE']; ?></td>
</tr>

