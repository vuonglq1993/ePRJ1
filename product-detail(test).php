<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'functions/db.php';
    $sql = "SELECT * FROM products";
    $products = select($sql);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ggg </title>
</head>

<body>
    <h1>Product Details</h1>
    <?php foreach ($products as $product): ?>
    <p>Product ID: <?php echo $product["product_id"]; ?>
    <p>Product Name: <?php echo $product["product_name"];?></p>
    <p>Product Starting Price: $<?php echo number_format($product['starting_price'], 2); ?></p>
    <p>Product Buy Now Price: $<?php echo number_format($product['buyout_price'], 2); ?></p>
    <p>Product Description: <?php echo htmlspecialchars($product['description']); ?></p>
    <p>Product Image: <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="Product Image" style="max-width: 200px;"></p>
    <a href="product(test).php?cat_id=<?php echo $product['category_id']; ?>">Back to Products</a>
    <hr>
    <?php endforeach; ?>
</body>

</html>