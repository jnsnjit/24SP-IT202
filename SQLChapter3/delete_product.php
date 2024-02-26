<?php
require_once('database_njit.php');

$product_id = filter_input(INPUT_POST, 'product_id',FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id',FILTER_VALIDATE_INT);

//delete the product from database
if ($product_id != false && $category_id != false){
    $query = 'DELETE FROM products WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id',$product_id);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>your delete statement status is $success</p>";


//display the product list page
}
include('product_list.php');
?>