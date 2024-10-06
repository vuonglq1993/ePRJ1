<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include 'functions/db.php';
    include 'functions/auction.php';
    $product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
    $product_data = get_product_data($product_id);
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
    <title>Categories</title>
</head>

<body>
    <!-- Header -->
    <?php include 'Components/header.php'; ?>


    <main>
        <!-- Name of the collection -->
        <div class="row  collectionname mt-5 mb-5">
            <?php
            if ($product_data) {
                $product_name = $product_data['product_name'];
                $product_description = $product_data['description'] ? htmlspecialchars($product_data['description']): 'No description available for this product.';
                $product_image = $product_data['image_url'];
                $product_detail = $product_data['product_detail']  ? htmlspecialchars($product_data['product_detail']) : 'No details are available for this product.';
                $product_collection = $product_data['collection_name'] ? htmlspecialchars($product_data['collection_name']) : 'Not in any collection';
                $start_time = $product_data['start_time'];
                $end_time = $product_data['end_time'];
                $has_auction = isset($start_time) && !empty($start_time);
                $formatted_start_time = date('F j, Y g:i a', strtotime($start_time));
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
                <?php if ($has_auction): ?>
                    <div class="col-md-6 col-sm-11" style="padding-left: 3rem" ;>
                        <p class="fs-1 fw-light"><?php echo htmlspecialchars($product_name); ?></p>
                        <div class="row mt-3">
                            <p class="fw-light color666 fs-6">Start from <?php echo htmlspecialchars($formatted_start_time); ?></p>
                        </div>
                        <div class="row">
                            <p class="fs-6 fw-light color0028BA"><?php echo htmlspecialchars($status_end); ?></p>
                            <p class="fs-4 fw-light color0028BA"><?php echo htmlspecialchars($status); ?></p>
                        </div>
                        <div class="my-4 ">
                            <div class="mt-3"><?php echo $product_description ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-6 col-sm-11" style="padding-left: 3rem" ;>
                        <p class="fs-1 fw-light"><?php echo htmlspecialchars($product_name); ?></p>
                        <div class="row mt-3">
                            <p class="fw-light color666 fs-6">No auction available</p>
                        </div>
                            <!-- Dropdown for product description -->
                            <div class="my-4 ">
                                <div class="mt-3"><?php echo $product_description ?></div>
                            </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="row">
                        <div class="col p-5">
                            <img src="<?php echo htmlspecialchars($product_image); ?>" alt="<?php echo htmlspecialchars($product_name); ?>" class="m-5 img-fluid" />
                        </div>
                        <div class="col bg-color p-5">
                            <p class="fs-3 text-start fw-light"><?php echo htmlspecialchars($product_detail); ?></p>
                        </div>
                    </div>
                <?php
            } else {
                echo "<p>No product found.</p>";
            }
                ?>
                </div>
        </div>
    </main>
    <!-- footer  -->
    <?php include 'Components/footer.php'; ?>
</body>

</html>