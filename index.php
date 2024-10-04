<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    include 'functions/db.php';
    include 'functions/auction.php';
    include 'functions/collection.php';
    include 'functions/pagination.php';
    $categories = select("SELECT * FROM categories ORDER BY category_name ASC");
    $products = select("SELECT image_url FROM products LIMIT 5");
    $brands = select("SELECT brand_image FROM brands");
    $category_id = isset($_GET['cat_id']) ? intval($_GET['cat_id']) : 0;
    if ($category_id > 0) {
        $result = select("SELECT category_id, category_name FROM categories WHERE category_id = ?", [$category_id]);
        $category_name = !empty($result) ? htmlspecialchars($result[0]['category_name']) : "All Categories";
        $link = 'categories2.php?cat_id=' . $category_id;
    } else {
        $category_name = "All Categories";
        $link = 'categories1.php';
    }
    $categories_image = select("SELECT image_url FROM categories ORDER BY category_id ASC");
    $auction_data = get_auction_data($user_id, $category_id);
    $trendin_data = get_trendin_data($user_id);
    $collection_data = get_collection_data();
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $pagination = paginate_auctions($auction_data, 3, $current_page);
    $current_auction_data = $pagination['data'];
    $total_pages = $pagination['total_pages'];
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="Components/footer.css">
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
    <script>
        // Ensure noActionLink runs after the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            noActionLink(); // Initialize noActionLink
        });
    </script>

    <title>Home</title>
</head>

<body>
    <?php include 'Components/header.php'; ?>
    <main>
        <!-- <?php
                if (isset($_SESSION['username'])) {
                    echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
                } else {
                    echo "Welcome, guest!";
                } ?> -->
        <!-- Featured content -->

        <div id="carouselExampleIndicators" class="carousel slide">
            <!-- 
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div> -->
            <?php if ($products) {
                $first_item1 = true;
                foreach ($products as $product) {
                    $image_url = $product['image_url'];
                    $active_class1 = $first_item1 ? 'active' : '';
                    $first_item1 = false;

            ?>
                    <div class="carousel-inner">
                        <div class="carousel-item <?php echo $active_class1; ?>">
                            <!-- <img src="<?php echo $image_url; ?>" class="d-block img-fluid w-100 " alt="..."> -->
                            <img src="images/Banner.jpg" class="d-block img-fluid w-100 " alt="...">

                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
            <!-- Trending -->
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <p class="fs-3">Our trending for sale</p>
                            </div>
                            <div class="p-2 mt-3">
                                <p><a href="#"
                                        class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">See
                                        all trending</a></p>
                            </div>
                        </div>
                        <div class="text-dark ps-4" style="--bs-text-opacity: .5;">
                            <p class="fs-6">Our online gallery favorites. Don't miss your chance - <strong>Shop
                                    now!</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-11">
                        <div class="trending">
                            <div id="carouselExample" class="carousel  slide">
                                <div class="carousel-inner trending-carousel-inner">
                                    <?php
                                    if ($trendin_data) {
                                        $first_item = true;
                                        foreach ($trendin_data as $auction) {
                                            $product_id = $auction['product_id'];
                                            $product_name = $auction['product_name'];
                                            $current_bid = $auction['current_bid'];
                                            $end_time = $auction['end_time'];
                                            $image_url = $auction['image_url'];
                                            $start_time = $auction['start_time'];
                                            $days_left = caculate_days_left($start_time, $end_time);
                                            if (new DateTime() < new DateTime($start_time)) {
                                                $bid_display = "Starting Price: ";
                                            } else {
                                                $bid_display = "Current Bid: ";
                                            }
                                            $active_class = $first_item ? 'active' : '';
                                            $first_item = false;
                                    ?>
                                            <div
                                                class="trending-carousel-item carousel-item <?php echo $active_class ?>">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card p-2">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="p-2"></div>
                                                                    <div class="p-2"><?php echo $days_left ?>
                                                                    </div>
                                                                    <div class="p-2">
                                                                        <a href="#" class="no-action" data-product-id="<?php echo $product_id; ?>"
                                                                            method="post"
                                                                            onclick="toggleLike(this)">
                                                                            <i class="bi <?php echo $auction['liked'] ? 'bi-heart-fill' : 'bi-heart'; ?>"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <img src="<?php echo $image_url ?>" alt=""
                                                                        class="img-fluid">
                                                                    <div class="row">
                                                                        <div class="col-5 text-start text-dark"
                                                                            style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                            <?php echo $bid_display ?>
                                                                        </div>
                                                                        <div class="col-4 text-start"
                                                                            style="font-size: 16px; margin: 2px;">
                                                                            <?php echo format_price($current_bid) ?>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-start">
                                                        <p class="m-2">
                                                            <?php echo htmlspecialchars($product_name) ?></p>
                                                        <div class="text-dark" style="--bs-text-opacity: .5;">
                                                            <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                            <p class="m-2">90x70cm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <div class="text-dark" style="--bs-text-opacity: .5;">

                                                            <p class="m-2">Interesting?</p>
                                                            <a href="#" class="btn bidbutton me-2">Bid now</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "<p>No trending items available.</p>";
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev trending-carousel-control-prev"
                                    type="button" data-bs-target="#testimonialCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next trending-carousel-control-next"
                                    type="button" data-bs-target="#testimonialCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Collections -->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="row justify-content-center">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <p class="fs-3">Buy anything that matches your style</p>
                                    </div>
                                    <div class="p-2 mt-3">
                                        <p><a href="#"
                                                class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">See
                                                all collections</a></p>
                                    </div>
                                </div>
                                <div class="text-dark ps-4" style="--bs-text-opacity: .5;">
                                    <p class="fs-6 ">Discover our curation for sale
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="collections">
                                    <div id="carouselExampleIndicators" class="carousel">
                                        <div class="carousel-inner collection-carousel-inner">
                                            <?php
                                            if ($collection_data) {
                                                $first_item = true;
                                                foreach ($collection_data as $collection) {
                                                    $image_url = $collection['images'];
                                                    $collection_name = $collection['collection_name'];
                                                    $collection_desc = $collection['collection_desc'];
                                                    $product_count = $collection['product_count'];
                                                    $active_class = $first_item ? 'active' : '';
                                                    $first_item = false;
                                            ?>
                                                    <div
                                                        class="carousel-item collection-carousel-item ms-1 <?php echo $active_class; ?>">
                                                        <div class="row">
                                                            <img src="images/1.jpg" alt="" class="img-fluid"
                                                                class="img-fluid" />
                                                            <div class="col-6 text-start text-dark">
                                                                <p style="font-size: 13px;"><strong><?php echo strtoupper(htmlspecialchars($collection_name)) ?></strong><br><?php echo htmlspecialchars($product_count) ?> Objects</p>
                                                            </div>
                                                            <div class="row text-center">
                                                                <a href="#" class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                                    style="font-size: 14px;" href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-caret-right-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                                    </svg> Discover all <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-caret-left-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                                    </svg>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="carousel-item collection-carousel-item ms-1 <?php echo $active_class; ?>">
                                                        <div class="row">
                                                            <img src="images/1.jpg" alt="" class="img-fluid"
                                                                class="img-fluid" />
                                                            <div class="col-6 text-start text-dark">
                                                                <p style="font-size: 13px;"><strong><?php echo strtoupper(htmlspecialchars($collection_name)) ?></strong><br><?php echo htmlspecialchars($product_count) ?> Objects</p>
                                                            </div>
                                                            <div class="row text-center">
                                                                <a href="#" class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                                    style="font-size: 14px;" href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-caret-right-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                                    </svg> Discover all <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-caret-left-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                                    </svg>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            } else {
                                                echo "<p>No collections available.</p>";
                                            }
                                            ?>
                                            <div class="carousel-item collection-carousel-item ms-1">
                                                <div class="row">
                                                    <img src="images/1.jpg" alt="" class="img-fluid"
                                                        class="img-fluid" />
                                                    <div class="col-6 text-start text-dark">
                                                        <p style="font-size: 13px;"><strong>ARTWORKS NEW
                                                                COLLECTIONS
                                                                2024</strong><br>35 Objects</p>
                                                    </div>
                                                    <div class="row text-center">
                                                        <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                            style="font-size: 14px;" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16"
                                                                fill="currentColor"
                                                                class="bi bi-caret-right-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                            </svg> Discover all <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16"
                                                                fill="currentColor"
                                                                class="bi bi-caret-left-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                            </svg>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item collection-carousel-item ms-1">
                                                <div class="row">
                                                    <img src="images/1.jpg" alt="" class="img-fluid"
                                                        class="img-fluid" />
                                                    <div class="col-6 text-start text-dark">
                                                        <p style="font-size: 13px;"><strong>ARTWORKS NEW
                                                                COLLECTIONS
                                                                2024</strong><br>35 Objects</p>
                                                    </div>
                                                    <div class="row text-center">
                                                        <a class="text-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                            style="font-size: 14px;" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16"
                                                                fill="currentColor"
                                                                class="bi bi-caret-right-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                            </svg> Discover all <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16"
                                                                fill="currentColor"
                                                                class="bi bi-caret-left-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                            </svg>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="carousel-control-prev collection-carousel-control-prev"
                                            type="button" data-bs-target="#testimonialCarousel"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button
                                            class="carousel-control-next collection-carousel-control-next"
                                            type="button" data-bs-target="#testimonialCarousel"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigate -->
                <div class="container mt-5">
                    <div class="navigating">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <p class="fs-3" style="margin-bottom: 1px;">What are you looking for?
                                </p>
                                <div class="text-dark" style="--bs-text-opacity: .5;">
                                    <p class="fs-6">Navigate through our most searched topics in our
                                        online gallery to start
                                        your
                                        jouney!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row  justify-content-center">
                            <div class="col-2">
                                <?php foreach ($categories as $category): ?>
                                    <p class="ms-2 mb-3"><a
                                            href="index.php?cat_id=<?php echo $category['category_id'] ?>"
                                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-opacity-25 link-underline-opacity-0-hover">
                                            <?php echo htmlspecialchars($category['category_name']) ?>
                                        </a></p>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <?php
                                    if ($current_auction_data) {
                                        foreach ($current_auction_data as $auction) {
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
                                            } else {
                                                $bid_display = "Current Bid: ";
                                            }
                                    ?>
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card p-2">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="p-2"></div>
                                                                    <div class="p-2"><?php echo $days_left ?>
                                                                    </div>
                                                                    <div class="p-2">
                                                                        <a href="#" class="no-action" data-product-id="<?php echo $product_id; ?>"
                                                                            method="post"
                                                                            onclick="toggleLike(this)">
                                                                            <i class="bi <?php echo $auction['liked'] ? 'bi-heart-fill' : 'bi-heart'; ?>"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <img src="<?php echo htmlspecialchars($image_url) ?>"
                                                                        alt="" class="img-fluid">
                                                                    <div class="row">
                                                                        <div class="col-5 text-start text-dark"
                                                                            style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                            <?php echo $bid_display ?>
                                                                        </div>
                                                                        <div class="col-4 text-start"
                                                                            style="font-size: 16px; margin: 2px;">
                                                                            <?php echo format_price($current_bid) ?>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 text-start">
                                                            <p class="m-2">
                                                                <?php echo htmlspecialchars($product_name) ?>
                                                            </p>
                                                            <div class="text-dark"
                                                                style="--bs-text-opacity: .5;">
                                                                <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                                <p class="m-2">90x70cm</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <div class="text-dark"
                                                                style="--bs-text-opacity: .5;">

                                                                <p class="m-2">Interesting?</p>
                                                                <a href="#" class="btn bidbutton me-2">Bid
                                                                    now</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "<p>No auction items available.</p>";
                                    }
                                    ?>
                                    <div class="row mb-3">
                                        <div class="text-center">
                                            <?php
                                            // Hiển thị các nút phân trang
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo '<a class="text-decoration-none p-1" href="?page=' . $i . '" class="btn btn-link">' . $i . '</a> ';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="text-center">
                                            <a href="<?php echo $link; ?> " class="btn seeall">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                </svg>
                                                See
                                                "<strong><?php echo htmlspecialchars($category_name) ?></strong>"
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Get insipred section -->
                <div class="container mt-5">
                    <div class="getinspired">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <p class="fs-3 text-start">Get inspired</p>
                                    </div>
                                    <div class="p-2 mt-3">
                                        <p><a href="#"
                                                class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-opacity-25 link-underline-opacity-75-hover">Explore
                                                all</a></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6 sm-12">
                                        <img src="./images/1.jpg" class="img-fluid" alt="" />
                                        <p class="fs-5 text-start mt-3">Adriano Tawin</p>
                                        <p class="fs-6 text-start">Inside the Cologne Apartment of a
                                            Trendsetting Content
                                            Creator Jewellery buyer and interior design content creator
                                            Jenny Brucherseifer
                                            shows
                                            us her art collection (and gives us serious room envy) in her...
                                        </p>
                                        <div class="text-start "><a href="#" class="btn readmore">Read
                                                more<svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                </svg> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 sm-12">
                                        <img src="./images/1.jpg" class="img-fluid" alt="" />
                                        <p class="fs-5 text-start mt-3">Adriano Tawin</p>
                                        <p class="fs-6 text-start">Inside the Cologne Apartment of a
                                            Trendsetting Content
                                            Creator Jewellery buyer and interior design content creator
                                            Jenny Brucherseifer
                                            shows
                                            us her art collection (and gives us serious room envy) in her...
                                        </p>
                                        <div class="text-start"><a href="#" class="btn readmore">Read
                                                more<svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                </svg> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Categories section -->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="row">
                                <p class="fs-3" style="margin-bottom: 5px;">Popular Categories</p>

                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=16"><img src="<?php echo htmlspecialchars($categories_image[15]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=4"><img src="<?php echo htmlspecialchars($categories_image[3]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=11"><img src="<?php echo htmlspecialchars($categories_image[10]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=14"><img src="<?php echo htmlspecialchars($categories_image[13]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=6"><img src="<?php echo htmlspecialchars($categories_image[7]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=10"><img src="<?php echo htmlspecialchars($categories_image[9]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=1"><img src="<?php echo htmlspecialchars($categories_image[0]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="categories2.php?cat_id=5"><img src="<?php echo htmlspecialchars($categories_image[4]['image_url']) ?>" class="img-fluid mt-2" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Section -->
                <div class="row emailsection">
                    <div class="emailform col-md-5 col-sm-11">
                        <p class="fs-3">Let us inspire you</p>
                        <p class="fw-lighter">Want to receive exciting antique and lifestyle content,
                            directly to your inbox?
                        </p>
                        <form>
                            <div class="mb-3 row">
                                <div class="col-8">
                                    <div class="container">
                                        <div class="row inputemail">
                                            <div class="col-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-envelope"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                                </svg>
                                            </div>
                                            <div class="col-10">
                                                <input type="email" class="no-border"
                                                    id="exampleInputEmail1" placeholder='Email address'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <button type="submit" class="btn btn-primary"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                            fill="currentColor" class="bi bi-caret-right-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                        </svg></button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <img src="./images/1.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <!-- Iconic Brand Section -->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="row">
                                <p class="fs-3" style="margin-bottom: 5px;">Iconic Brands</p>
                            </div>
                            <div class="row">
                                <?php foreach ($brands as $brand): ?>
                                    <div class="col-md-2 mt-3 sm-4">
                                        <img src="<?php echo htmlspecialchars($brand["brand_image"]); ?>" class="img-fluid" alt="" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Download app section  -->
                <div class="row downloadsection mt-5 mb-5">
                    <div class="downloadapp col-md-5 col-sm-11" style="padding: 3rem" ;>
                        <p class="fs-2 mt-5">Download the <strong>BIDSPIRIT</strong> app</p>
                        <p class="fs-5">and discover special object anytime, anywhere</p>
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <a href="#"><img src="./images/Appstore.png" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="col-md-6 col-sm-12  mb-3">
                                <a href="#"><img src="./images/CHplay.png" class="img-fluid" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <img src="./images/footerapp.png" class="img-fluid" alt="" />
                    </div>
                </div>
    </main>
    <?php include 'Components/footer.php'; ?>
</body>

</html>