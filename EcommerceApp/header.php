<?php
session_start();
include 'autoLoader.php';
include 'header.html';

include 'AutoLoader.php';
session_start();

$loggedin = false;
if (isset($_SESSION['userid'])) {
    $loggedin = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous" />
<link href="resources/styles/global.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="../..//home.php">Ecommerce Application</a>

			<!-- 			<button class="navbar-toggler" type="button" -->
			<!-- 				data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" -->
			<!-- 				aria-controls="navbarSupportedContent" aria-expanded="false" -->
			<!-- 				aria-label="Toggle navigation"> -->
			<!-- 				<span class="navbar-toggler-icon"></span> -->
			<!-- 			</button> -->

			<!-- 			<div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
			<!-- 				<ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->

          <?php
        // for when logged in
        // if ($loggedin) {
        // include '../../userInfo.php';
        // include '../../cartIcon.php';
        // }
        ?>
          <li class="nav-item"><a class="nav-link"
				href="home.php">Home</a></li>
				 <li class="nav-item"><a class="nav-link"
				href="login.html">Log In</a></li>
				<li class="nav-item"><a class="nav-link"
				href="products.php">Products</a></li>
          <? if($loggedin){ ?>
         
          <? } else { ?>
          		
        <a href="Handlers/cart/addToCartHandler.php">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>


			<!--           <li class="nav-item"><a class="nav-link" -->
			<!-- 						href="../../views/login/login.php">Login</a></li> -->
			<!-- 					<li class="nav-item"><a class="nav-link" -->
			<!-- 						href="../../views/register/register.php">Sign Up</a></li> -->
          <? } ?>

          <?php
        // if (isset($_SESSION['role']) == true && $_SESSION['role'] == 2) {
        // include '../../views/shared/adminSelect.php';
        // }
        ?>


        </ul>
			<!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
		</div>
		</div>
	</nav>
	<main>