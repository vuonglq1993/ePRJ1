<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start(); // Start the session to retrieve user information.
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0; // Get user ID from session.
    
    // Include database and favorite functions.
    include 'functions/db.php'; 
    include 'functions/fav_collectf.php';
    
    // Get sorting option from URL (default is 'start_time').
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'start_time'; 
    
    // Fetch favorite data based on user ID and sorting criteria.
    $fav_data = get_fav_data($user_id, $sort_by); 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- jQuery for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- External CSS and Bootstrap for styling -->
    <link rel="stylesheet" href="style/fav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap JS for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript -->
    <script src="javascript/index.js"></script>
    <script src="javascript/fav.js"></script>
    
    <title>Favourites</title>
</head>

<body>
    <!-- Include header component -->
    <?php include 'Components/header.php'; ?>
    
    <main>
        <div class="container my-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <!-- Page Title -->
                    <div class="row">
                        <div class="p-2">
                            <p class="fs-3 ps-3">My favourites</p>
                        </div>
                    </div>

                    <!-- Display the number of objects and sorting options -->
                    <div class="row">
                        <div class="ps-4 mt-5">
                            <p class="fs-6 color0028BA">
                                <strong>
                                    <?php
                                    // Count the number of favorite items and display the count.
                                    $count = count($fav_data);
                                    echo $count . ' ' . ($count === 1 ? 'Object' : 'Objects'); 
                                    ?>
                                </strong>
                            </p>
                        </div>

                        <!-- Sorting dropdown for the favorite items -->
                        <div class="d-flex flex-row ps-4">
                            <div>
                                <p class="fs-6 color666">Sort by</p>
                            </div>
                            <div class="hidden">
                                <!-- Sorting form -->
                                <form method="get" action="fav_obj.php" id="sortForm">
                                    <!-- Sorting dropdown: triggers form submission on change -->
                                    <select class="no-border form-select color0028BA" name="sort_by" onchange="document.getElementById('sortForm').submit();" aria-label="Default select example">
                                        <option value="start_time" <?php echo ($sort_by === 'start_time') ? 'selected' : ''; ?>>Time remaining</option>
                                        <option value="current_bid" <?php echo ($sort_by === 'current_bid') ? 'selected' : ''; ?>>Current Bid</option>
                                        <option value="product_name" <?php echo ($sort_by === 'product_name') ? 'selected' : ''; ?>>Product Name</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Display favorite items in a grid -->
                    <div class="row">
                        <?php 
                        // Check if there are favorite items to display.
                        if ($fav_data) { 
                            foreach ($fav_data as $fav) { 
                                $product_id = $fav['product_id']; // Get product ID.
                                $product_name = $fav['product_name']; // Get product name.
                                $current_bid = $fav['current_bid']; // Get current bid.
                                $end_time = $fav['end_time']; // Get auction end time.
                                $start_time = $fav['start_time']; // Get auction start time.
                                $image_url = $fav['image_url']; // Get product image URL.
                                $days_left = caculate_days_left1($start_time, $end_time); // Calculate days left for the auction.

                                // Determine the bid display message based on auction status.
                                if (empty($start_time)) { 
                                    $bid_display = "Buyout Price: ";
                                } elseif (new DateTime() < new DateTime($start_time)) { 
                                    $bid_display = "Starting Price: ";
                                } elseif (new DateTime() > new DateTime($end_time)) { 
                                    $bid_display = "Winning price: ";
                                } else { 
                                    $bid_display = "Current Bid: ";
                                }
                        ?>
                                <!-- Display individual favorite item -->
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
                                                            <a href="#" class="no-action" data-product-id="<?php echo $product_id; ?>"
                                                                method="post"
                                                                onclick="toggleLike(this)">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a
                                                            href="categories3.php?product_id=<?php echo htmlspecialchars($product_id) ?>"><img
                                                                src="<?php echo $image_url ?>"
                                                                alt="<?php echo htmlspecialchars($product_name) ?>"
                                                                class="img-fluid"></a>
                                                        <!-- Product image and bid information -->
                                                        <img src="<?php echo $image_url ?>" alt="" class="img-fluid">
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
                            } // End of foreach loop
                        } else { 
                            // If no favorite items found, display a message.
                            echo "<p>No data found.</p>"; 
                        } 
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Include footer component -->
    <?php include 'Components/footer2.php'; ?>
</body>

</html>
