<?php

//cst-236 milestone
//joey gallotta

$roleAsWord = 'user';

if ($users[$i]['ROLE'] == 2) {
    $roleAsWord = 'admin';
} else {
    $roleAsWord = 'user';
}
?>



<tr>
	<td class="user-id"><?php echo $users[$i]['ID']; ?></td>
	<td class="user-firstname"> <?php echo $users[$i]['FIRST_NAME']; ?></td>
	<td class="user-lastname"> <?php echo $users[$i]['LAST_NAME']; ?>
      <a class="btn btn-outline-warning btn-sm float-end"
		href="editUser.php?id=<? echo $users[$i]['ID']; ?>"
		class="product-form-submit">Edit</a> <a
		class="btn btn-outline-danger btn-sm float-end"
		href="deleteUserHandler.php?id=<? echo $users[$i]['ID']; ?>"
		class="product-form-submit">Delete</a>
	</td>
	<td class="user-username"><?php echo $users[$i]['USERNAME']; ?></td>
	<td class="user-role"><?= $roleAsWord ?></td>
</tr>



?>
