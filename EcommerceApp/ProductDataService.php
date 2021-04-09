<?php 
class ProductDataService
{
 //return an array of all products   
    function getAllProducts()
    {
        $db = new Database();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT * FROM products");
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if (!$result) {
            echo "error in SQL statement";
            exit;
        }
        
        if ($result->num_rows == 0) {
            return null;
        } else {
            
            $product_array = array();
            
            while ($product = $result->fetch_assoc()) {
                array_push($product_array, $product);
            }
            return $product_array;
        }
    }
    
    function searchByNameOrDescription($searchQueryString)
    {
        $db = new Database();
        
        $connection = $db->getConnection();
        
        echo  'search: ' . $searchQueryString;
        
        $stmt = $connection->prepare("SELECT * FROM products WHERE product_name LIKE ? OR product_description LIKE ?");
        
        $like_productName = "%" . $searchQueryString . "%";
        $like_productDesc = "%" . $searchQueryString . "%";
        $stmt->bind_param("ss", $like_productName, $like_productDesc);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if (!$result) {
            echo "assume there is an errir in SQL statement";
            exit;
        }
        
        if ($result->num_rows == 0) {
            return null;
        } else {
            
            $products_array = array();
            
            while ($product = $result->fetch_assoc()) {
                array_push($products_array, $product);
            }
            return $products_array;
        }
    }
}


?>