<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    include 'functions/db.php';
    include 'functions/fav_collectf.php';
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'start_time';
    $fav_data = get_fav_data($user_id, $sort_by);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/fav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="Components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="/ePRJ1/javascript/index.js"></script>
    <script src="/ePRJ1/javascript/fav.js"></script>
    <title>Home</title>
</head>

<body>
    <?php include 'Components/header.php'; ?>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="p-2">
                            <p class="fs-3 ps-3">My favourites</p>
                            <nav class="nav">
                                <a class="nav-link fw-bold" aria-current="page" href="#" ;>Objects</a>
                                <a class="nav-link  fw-bold active" href="fav_collect.php"
                                    style="color: #666666">Collections</a>
                                <a class="nav-link fw-bold" href="fav_seller.php" style="color: #666666" ;>Seller</a>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ps-4 mt-5">
                            <p class="fs-6 color0028BA">
                                <strong>
                                    <?php
                                    $count = count($fav_data);
                                    echo $count . ' ' . ($count === 1 ? 'Object' : 'Objects');
                                    ?>
                                </strong>
                            </p>
                        </div>
                        <div class="d-flex flex-row ps-4">
                            <div>
                                <p class="fs-6 color666">Sort by</p>
                            </div>
                            <div class="hidden">
                                <form method="get" action="fav_obj.php" id="sortForm">
                                    <select class="no-border form-select color0028BA" name="sort_by" onchange="document.getElementById('sortForm').submit();" aria-label="Default select example">
                                        <option value="start_time" <?php echo ($sort_by === 'start_time') ? 'selected' : ''; ?>>Time remaining</option>
                                        <option value="current_bid"<?php echo ($sort_by === 'current_bid') ? 'selected' : ''; ?>>Current Bid</option>
                                        <option value="product_name"<?php echo ($sort_by === 'product_name') ? 'selected' : ''; ?>>Product Name</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($fav_data) {
                            foreach ($fav_data as $fav) {
                                $product_id = $fav['product_id'];
                                $product_name = $fav['product_name'];
                                $current_bid = $fav['current_bid'];
                                $end_time = $fav['end_time'];
                                $start_time = $fav['start_time'];
                                $image_url = $fav['image_url'];
                                $days_left = caculate_days_left1($start_time, $end_time);
                                if (new DateTime() < new DateTime($start_time)) {
                                    $bid_display = "Starting price: ";
                                } else if (new DateTime() > new DateTime($start_time) && new DateTime() < new DateTime($end_time)) {
                                    $bid_display = "Current Bid: ";
                                } else {
                                    $bid_display = "Winning Price: ";
                                }
                        ?>
                                <div class="col-md-4 col-sm-12 mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card p-2">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2"></div>
                                                        <div class="p-2"> <?php echo $days_left ?></div>
                                                        <div class="p-2">
                                                            <a href="#" class="no-action" data-product-id="<?php echo $product_id; ?>"
                                                                method="post"
                                                                onclick="toggleLike(this)">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img src="<?php echo $image_url ?>" alt="" class="img-fluid">
                                                        <div class="row">
                                                            <div class="col-5 text-start text-dark"
                                                                style="--bs-text-opacity: .5; font-size: 14px; margin: 4px;">
                                                                <?php echo $bid_display ?></div>
                                                            <div class="col-4 text-start" style="font-size: 16px; margin: 2px;">
                                                                <?php echo format_price1($current_bid) ?></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p class="m-2"><?php echo $product_name ?></p>
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
                            echo "No data found.";
                        }
                        ?>


                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php include 'Components/footer.php'; ?>
</body>

</html>