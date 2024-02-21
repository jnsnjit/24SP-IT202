<?php
//slide 26
//require once database local/njit, choose
require_once('database_njit.php');

//get category id
$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
if($category_id == NULL || $category_id == FALSE){
    $category_id = 1;
}
//get name for selected category (4 main steps)
$queryCategory = 'SELECT * FROM categories WHERE categoryID = :category_id';
//in troobleshooting, you can type this code in sql server command line first to test
$statement1 = $db->prepare($queryCategory); //1
$statement1->bindValue(':category_id',$category_id);
$statement1->execute(); //2
$category = $statement1->fetch(); //3, fetch will ask for a specific value/1D array
$category_name = $category['categoryName'];
$statement1->closeCursor(); //4
//echo "<pre>";
//print_r($category);
//echo "The name of the category is";
//echo "</pre>";

//slide 27, get all categories
$queryAllCategories = 'SELECT * FROM categories ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();//fetchAll, will work for 2D arrays
$statement2->closeCursor();
//state3
$queryProducts = 'SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':category_id',$category_id);
$statement3->execute();
$products=$statement3->fetchAll();
$statement3->closeCursor();


//debug
//echo '<pre>';
//print_r($categories);
//echo '</pre>';
?>
<!-- slide 28 -->
<html>
    <head>
        <title>Guitar Shop</title>
    </head>
    <body>
        <main>
            <h1>Product List</h1>
            <h2><?php echo $category_name ?></h2>
            <nav>
                <ul>
                    <?php foreach($categories as $category) : ?>
                        <li>
                            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                            <?php echo $category['categoryName']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <td> <?php echo $product['productCode']; ?> </td>
                        <td> <?php echo $product['productName']; ?> </td>
                        <td> <?php echo $product['listPrice']; ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </main>
    </body>
</html>
