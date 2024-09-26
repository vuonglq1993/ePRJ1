<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'functions/db.php';
    $product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
    if ($product_id > 0) {
        $product = findById("SELECT * FROM products WHERE product_id = $product_id");
        if (!$product) {
            die("Product not found");
        }
    } else {
        die("Invalid product ID");
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['product_name']); ?> </title>
</head>

<body>
    <h1>Product Details</h1>
    <p>Product Name: <?php echo htmlspecialchars($product['product_name']); ?></p>
    <p>Product Starting Price: $<?php echo number_format($product['starting_price'], 2); ?></p>
    <p>Product Buy Now Price: $<?php echo number_format($product['buyout_price'], 2); ?></p>
    <p>Product Description: <?php echo htmlspecialchars($product['description']); ?></p>
    <p>Product Image: <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="Product Image" style="max-width: 200px;"></p>
    <a href="product(test).php?cat_id=<?php echo $product['category_id']; ?>">Back to Products</a>
</body>

</html>