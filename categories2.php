<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    include 'functions/db.php';
    include 'functions/auction.php';
    $category_id = isset($_GET['cat_id']) ? intval($_GET['cat_id']) : null;
    // $collection = select("SELECT * FROM collections WHERE category_id = $category_id");
    $auction_data = get_auction_data($user_id, $category_id);
    $categories = select("SELECT * FROM categories WHERE category_id=$category_id");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/footer2.css">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>
    <title>Home</title>
</head>

<body>
    <!-- header  -->
    <?php include 'Components/header.php'; ?>
    <main>
        <!-- Product -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="d-flex flex-row">
                            <?php foreach ($categories as $category): ?>
                                <div class="p-2">
                                    <p class="fs-3">From <?php echo htmlspecialchars($category['category_name']) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="collections">
                                <?php if (!empty($auction_data)): ?>
                                    <div class="row">
                                        <?php foreach ($auction_data as $auction): ?>
                                            <?php
                                            $product_id = $auction['product_id'];
                                            $product_name = $auction['product_name'];
                                            $current_bid = $auction['current_bid'] ? htmlspecialchars($auction['current_bid']) : htmlspecialchars($auction['buyout_price']);
                                            $end_time = $auction['end_time'];
                                            $image_url = $auction['image_url'];
                                            $start_time = $auction['start_time'];
                                            $days_left = caculate_days_left($start_time, $end_time);

                                            if (empty($start_time)) {
                                                $bid_display = "Buyout Price: ";
                                            } elseif (new DateTime() < new DateTime($start_time)) {
                                                $bid_display = "Starting Price: ";
                                            } elseif (new DateTime() > new DateTime($end_time)) {
                                                $bid_display = "Highest price: ";
                                            } else {
                                                $bid_display = "Current Bid: ";
                                            }
                                            ?>
                                            <div class="col-md-3 col-sm-6 mb-3"> <!-- Thay đổi ở đây -->
                                                <div class="card p-1"> <!-- Giảm padding -->
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="p-2"></div>
                                                            <div class="p-2"><?php echo $days_left ?></div>
                                                            <div class="p-2">
                                                                <a href="#" class="no-action"
                                                                    data-product-id="<?php echo $product_id; ?>"
                                                                    method="post" onclick="toggleLike(this)">
                                                                    <i class="bi <?php echo $auction['liked'] ? 'bi-heart-fill' : 'bi-heart'; ?>"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="categories3.php?product_id=<?php echo htmlspecialchars($product_id) ?>">
                                                            <img src="<?php echo $image_url ?>"
                                                                alt="<?php echo htmlspecialchars($product_name) ?>"
                                                                class="img-fluid">
                                                        </a>
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                <?php echo $bid_display ?>
                                                            </div>
                                                            <div class="col-4 ms-4 text-end"
                                                                style="font-size: 16px; margin: 2px;">
                                                                <?php echo format_price($current_bid) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-6 text-start">
                                                                <p class="m-1"><?php echo htmlspecialchars($product_name) ?></p> <!-- Giảm margin -->
                                                                <div class="text-dark" style="--bs-text-opacity: .5;">
                                                                    <p class="m-1">Acrilyc, Sand on Canvas</p> <!-- Giảm margin -->
                                                                    <p class="m-1">90x70cm</p> <!-- Giảm margin -->
                                                                </div>
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                <div class="text-dark" style="--bs-text-opacity: .5;">
                                                                    <p class="m-1">Interesting?</p> <!-- Giảm margin -->
                                                                    <a href="#" class="btn bidbutton me-2">Bid now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php else: ?>
                                    <p>No trending items available.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- footer  -->
    <?php include 'Components/footer2.php'; ?>

</body>

</html>