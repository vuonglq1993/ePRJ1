<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    include 'functions/db.php';
    include 'functions/auction2.php';
    $sponsored_auctions = get_sponsored_auctions_data($user_id);
    ?>
    <!-- Meta tags for responsive design and character encoding -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- External CSS files for layout and design -->
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/categories.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="Components/footer.css">

    <!-- Bootstrap CSS for responsive layout and design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Popper.js and Bootstrap JS for handling interactive elements -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- Custom JavaScript for page-specific interactions -->
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>

    <title>Sponsored Auction</title>
</head>

<body>
    <!-- Include header component -->
    <?php include 'Components/header.php'; ?>

    <main>
        <!-- Banner section with a carousel for images -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <!-- Active carousel item -->
                <div class="carousel-item active">
                    <img src="images/2.jpg" class="d-block img-fluid w-100" alt="...">
                </div>
            </div>
        </div>

        <!-- Main content container -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="p-2">
                            <!-- Page title and navigation for auctions -->
                            <p class="fs-3 ps-3">Sponsored auctions by Rolex</p>
                            <nav class="nav">
                                <!-- Navigation tabs for different auction types -->
                                <a class="nav-link fw-bold" href="trending_auctions.php" style="color: #666666;">Trending Auctions</a>
                                <a class="nav-link fw-bold active" href="#" aria-current="page">Sponsored auction</a>
                                <a class="nav-link fw-bold" href="incoming_auctions.php" style="color: #666666;">Incoming auction</a>
                                <a class="nav-link fw-bold" href="completed_auctions.php" style="color: #666666;">Completed auction</a>
                            </nav>
                        </div>
                    </div>

                    <!-- Information about the number of objects in the auction -->
                    <div class="row">
                        <div class="ps-4 mt-5">
                            <!-- <p class="fs-6 color0028BA"><strong>115 objects</strong></p> -->
                        </div>

                        <!-- Dropdown to sort auctions by time remaining or other criteria -->
                        <div class="d-flex flex-row ps-4">
                            <!-- <div>
                                <p class="fs-6 color666">Sort by</p>
                            </div> -->
                            <div class="hidden">
                                <!-- Sorting options -->
                                <!-- <select class="no-border form-select color0028BA" aria-label="Default select example">
                                    <option selected>Time remaining</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select> -->
                            </div>
                        </div>
                    </div>

                    <!-- Auction item display section -->
                    <div class="container">
                        <div class="row">
                            <?php
                            if ($sponsored_auctions) {
                                foreach ($sponsored_auctions as $auction) {
                                    $auction_id = $auction['auction_id'];
                                    $product_id = $auction['product_id'];
                                    $product_name = $auction['product_name'];                                    
                                    $end_time = $auction['end_time'];
                                    $image_url = $auction['image_url'];
                                    $start_time = $auction['start_time'];
                                    $days_left = caculate_days_left2($start_time, $end_time);
                                    if (empty($start_time)) {
                                        $bid_display = "Buyout Price: ";
                                        $current_bid = $auction['buyout_price'];
                                    } elseif (new DateTime() < new DateTime($start_time)) {
                                        $bid_display = "Starting Price: ";
                                        $current_bid = $auction['starting_price'];
                                    } elseif (new DateTime() > new DateTime($end_time)) {
                                        $bid_display = "Winning price: ";
                                        $current_bid = $auction['current_bid'];
                                    } else {
                                        $bid_display = "Current Bid: ";
                                        $current_bid = $auction['current_bid'];
                                    }
                            ?>
                                    <div class="col-md-4 col-sm-12 mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <!-- Display days left and favorite icon -->
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2"><?php echo $days_left ?></div>
                                                        <div class="p-2">
                                                            <!-- Favorite icon with toggle functionality -->
                                                            <a href="#" class="no-action" data-product-id="<?php echo htmlspecialchars($product_id); ?>"
                                                                method="post"
                                                                onclick="toggleLike(this)">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!-- Product image and bid information -->
                                                        <a
                                                            href="categories3.php?product_id=<?php echo htmlspecialchars($product_id) ?>"><img
                                                                src="<?php echo $image_url ?>"
                                                                alt="<?php echo htmlspecialchars($product_name) ?>"
                                                                class="img-fluid"></a>
                                                        <!-- Product image and bid information -->
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                <?php echo $bid_display ?>
                                                            </div>
                                                            <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                                <?php echo format_price1($current_bid) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Display additional product details -->
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2"><?php echo $product_name ?></p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="text-dark" style="--bs-text-opacity: .5;">
                                                <p class="m-2">Interesting?</p>
                                                <a href="bid_details.php?auction_id=<?php echo htmlspecialchars($auction_id) ?>"
                                                    class="btn bidbutton me-2">Bid
                                                    now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            } else {
                                echo "<p>No completed auctions found.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Include footer component -->
    <?php include 'Components/footer2.php'; ?>

</body>

</html>