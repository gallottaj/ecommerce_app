<?php 
class ProductDataService
{
    
    function getAllProducts()
    {
        $database = new Database();
        
        $conn = $database->getConnection();
        
        $stmt = $conn->prepare("SELECT * FROM EcommerceApp.products");
        
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
    
    // function findProductsByName($searchName){
    //   $database = new Database();
    
    //   $conn = $database->getConnection();
    
    //   $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE")
    // }
    
    
    function searchByNameOrDescription($searchQueryString)
    {
        $database = new Database();
        
        echo  'query string: ' . $searchQueryString;
        
        $conn = $database->getConnection();
        
        $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE ? OR PRODUCT_DESCRIPTION LIKE ?");
        
        $like_productName = "%" . $searchQueryString . "%";
        $like_productDesc = "%" . $searchQueryString . "%";
        $stmt->bind_param("ss", $like_productName, $like_productDesc);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if (!$result) {
            echo "error in SQL statement";
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