<?php 
// get the data from the form
// debug only, print r will show all data being sent through specificed thing (post, get)
// print_r($_POST);

$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent');

// calculate discount and discounted price
$discount_price = $list_price * $discount_percent * 0.01;
$discounted_price = $list_price - $discount_price;

// apply formating to discount and discounted price
$list_price_f = "$" . number_format($list_price,2);
# . in php will append two data types, similiar to java, but uses . instead of +
$discount_percent_f = $discount_percent . "%";
$discount_f = "$" . number_format($discount_price, 2);
$discounted_price_f = "$" . number_format($discounted_price, 2);

?> 
<html>
    <head>
        <title>Product Discount Calculator</title>
    </head>
    <body>
        <h1>Product Discount Calculator</h1>
        <label>Product Description</label>
        <span><?php echo htmlspecialchars($product_description);?></span>
        <br>
        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f);?></span>
        <br>
        <label>Standard Discount</label>
        <span><?php echo htmlspecialchars($discount_percent_f);?></span>
        <br>
        <label>Discount Amount:</label>
        <span><?php echo $discount_f;?></span>
        <br>
        <label>Discounted Price</label>
        <span><?php echo $discounted_price_f;?></span>
    </body>
</html>
