<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    include 'functions/db.php';
    include 'functions/fsearch.php';
    include 'functions/auction.php';
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $search_data = search($search,$user_id);
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Components/footer.css">

    <link rel="stylesheet" href="style/categories3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
    <title>Categories</title>
</head>

<body>
    <!-- Header -->
    <?php include 'Components/header.php'; ?>
    <main>
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h2 class="mt-4">Search Results for "<?php echo htmlspecialchars($search); ?>"</h2>
                    <div class="row">
                        <?php
                        if (!empty($search_data)) {
                            foreach ($search_data as $auction) {
                                $product_id = $auction['product_id'];
                                $image_url = $auction['image_url'];
                                $current_bid = $auction['current_bid'];
                                $start_time = $auction['start_time'];
                                $end_time = $auction['end_time'];
                                $days_left = caculate_days_left_search($start_time, $end_time);
                                $product_name = $auction['product_name'];
                                if (new DateTime() < new DateTime($start_time)) {
                                    $bid_display = "Starting Price: ";
                                } else {
                                    $bid_display = "Current Bid: ";
                                }
                        ?>
                                <div class="col-md-4 col-sm-12 mt-5">
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
                            echo "<p>No search results found.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer  -->
    <?php include 'Components/footer.php'; ?>
</body>