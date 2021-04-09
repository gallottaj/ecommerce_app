<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'header.php';

// get the search term from the input form
$searchPhrase = $_GET['searchQueryString'];


$bs = new ProductBusinessService();

//returns an array of products
$products = $bs->searchByNameOrDescription($searchPhrase);

?>
<h2>Search Results</h2>

<?php

if ($products) {
  // we got some results
  include 'productSearchResponse.php';
} else {
  echo 'no results';
}

?>