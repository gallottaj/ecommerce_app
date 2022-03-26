<?php

// cst-236 milestone
// joey gallotta
include '../../header.php';

$date1 = $_GET['date1'];
$date2 = $_GET['date2'];

?>

<div class="container">
	<table id="users" class="table table-light table-hover">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Date</th>
				<th>User</th>
				<th>Quantity</th>
				<th>Subtotal</th>
				<th>Order Total</th>
			</tr>
		</thead>
		<tbody>
        <?php

        for ($i = 0; $i < count($orders); $i ++) {
            include '../../Admin/orderTableItem.php';
        }

        ?>

      </tbody>
	</table>
</div>
<?php
