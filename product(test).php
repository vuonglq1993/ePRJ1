<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once 'functions/db.php';
        $cat_id = isset($_GET['cat_id']) ? intval($_GET['cat_id']) : 0; // Đảm bảo rằng ID là số nguyên

        // Kiểm tra nếu ID hợp lệ
        if ($cat_id > 0) {
            $products = select("SELECT * FROM products WHERE category_id = $cat_id");
            if (!$products || count($products) == 0) {
                die("No products found in this category.");
            }
        } else {
            die("Invalid category ID.");
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <h1>Products in Category</h1>

    <div class="product-list">
        <!-- Hiển thị từng sản phẩm trong vòng lặp -->
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
                <p>Starting Price: $<?php echo number_format($product['starting_price'], 2); ?></p>
                <p>Buy Now Price: $<?php echo number_format($product['buyout_price'], 2); ?></p>
                <p>Description: <?php echo htmlspecialchars($product['description']); ?></p>
                <p>
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="Product Image" style="max-width: 200px;">
                </p>
                <!-- Link đến trang chi tiết sản phẩm -->
                <a href="product-detail(test).php?product_id=<?php echo $product['product_id']; ?>">View Details</a>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="index.php">Back to Home</a>
</body>
</html>
