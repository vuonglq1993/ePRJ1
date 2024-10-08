<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Start the session to manage user data
    session_start();

    // Include the database and auction functions
    include 'functions/db.php';
    include 'functions/auction.php';

    // Retrieve the product ID from the URL query parameter
    $product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;

    // Fetch product data using the product ID
    $product_data = get_product_data($product_id);

    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery library for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Linking CSS files for styling the page and Bootstrap for responsiveness -->
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="style/categories.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Bootstrap CSS for responsive design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Popper.js and Bootstrap JS for handling UI interactions -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- Custom JavaScript for additional interactions -->
    <script src="javascript/index.js"></script>

    <title>Categories</title>
</head>

<body>
    <!-- Header section -->
    <?php include 'Components/header.php'; ?>

    <main>
        <!-- Section displaying the product's name and auction details -->
        <div class="row collectionname mt-5 mb-5">
            <?php
            // Check if the product data is available
            if ($product_data) {
                $auction_id = $product_data['auction_id'];
                $product_name = $product_data['product_name'];
                $product_description = $product_data['description'] ? htmlspecialchars($product_data['description']) : 'No description available for this product.';
                $product_image = $product_data['image_url'];
                $product_detail = $product_data['product_detail'] ? htmlspecialchars($product_data['product_detail']) : 'No details are available for this product.';
                $product_collection = $product_data['collection_name'] ? htmlspecialchars($product_data['collection_name']) : 'Not in any collection';
                $start_time = $product_data['start_time'];
                $end_time = $product_data['end_time'];

                // Check if the product is part of an auction
                $has_auction = isset($start_time) && !empty($start_time);
                $formatted_start_time = date('F j, Y g:i a', strtotime($start_time));

                // Set auction status based on time
                if (new DateTime() < new DateTime($start_time)) {
                    $status = 'Upcoming in: ' . date_diff(new DateTime(), new DateTime($start_time))->format('%d days, %h hours, %i minutes') . '.';
                    $status_end = 'Ends on ' . date('F j, Y g:i a', strtotime($end_time));
                } elseif (new DateTime() >= new DateTime($start_time) && new DateTime() <= new DateTime($end_time)) {
                    $status = 'Ends in ' . date_diff(new DateTime(), new DateTime($end_time))->format('%d days, %h hours, %i minutes') . '.';
                    $status_end = 'On ' . date('F j, Y g:i a', strtotime($end_time));
                } else {
                    $status = 'Ended ' . date_diff(new DateTime($end_time), new DateTime())->format('%d days, %h hours, %i minutes') . ' ago.';
                    $status_end = 'Ended on ' . date('F j, Y g:i a', strtotime($end_time));
                }
                ?>
                <!-- Display product details if it has an auction -->
                <?php if ($has_auction): ?>
                    <div class="col-md-6 col-sm-11" style="padding-left: 3rem">
                        <p class="fs-1 fw-light"><?php echo htmlspecialchars($product_name); ?></p>
                        <div class="row mt-3">
                            <p class="fw-light color666 fs-6">Start from <?php echo htmlspecialchars($formatted_start_time); ?>
                            </p>
                        </div>
                        <div class="row">
                            <p class="fs-6 fw-light color0028BA"><?php echo htmlspecialchars($status_end); ?></p>
                            <p class="fs-4 fw-light color0028BA"><?php echo htmlspecialchars($status); ?></p>
                        </div>
                        <div class="my-4 ">
                            <div class="my-3"><?php echo $product_description ?></div>
                            <a href="bid_details.php?auction_id=<?php echo htmlspecialchars($auction_id) ?>"
                                class="btn bidbutton me-2">Bid
                                now</a>
                        </div>
                    </div>
                    <!-- Display if there is no auction available -->
                <?php else: ?>
                    <div class="col-md-6 col-sm-11" style="padding-left: 3rem">
                        <p class="fs-1 fw-light"><?php echo htmlspecialchars($product_name); ?></p>
                        <div class="row mt-3">
                            <p class="fw-light color666 fs-6">No auction available</p>
                        </div>
                        <div class="my-4 ">
                            <div class="my-3"><?php echo $product_description ?></div>
                            <a href="bid_details.php?auction_id=<?php echo htmlspecialchars($auction_id) ?>"
                                class="btn bidbutton me-2">Bid
                                now</a>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Product image and additional details section -->
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="row">
                        <div class="col p-5">
                            <img src="<?php echo htmlspecialchars($product_image); ?>"
                                alt="<?php echo htmlspecialchars($product_name); ?>" class="m-5 img-fluid" />
                        </div>
                        <div class="col bg-color p-5">
                            <p class="fs-3 text-start fw-light"><?php echo htmlspecialchars($product_detail); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                // Display message if no product data is found
                echo "<p>No product found.</p>";
            }
            ?>
        </div>
    </main>

    <!-- Footer section -->
    <?php include 'Components/footer2.php'; ?>
</body>

</html>