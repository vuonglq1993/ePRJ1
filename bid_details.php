<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Start the session to handle user authentication
    session_start();
    // Check if the user is logged in and set the user_id variable
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

    // Include database connection and bid functions
    include 'functions/db.php';
    include 'functions/bidf.php';

    // Retrieve auction_id from the URL, and ensure it's an integer
    $auction_id = isset($_GET['auction_id']) ? intval($_GET['auction_id']) : '';

    // Fetch the bid data based on the auction_id
    $bid_data = get_bid_data($auction_id);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery library for handling JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Linking CSS files for styling the header, footer, and bid details -->
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="Components/header2.css">
    <link rel="stylesheet" href="style/bid_details.css">

    <!-- Bootstrap icons and Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap JS and Popper.js for responsive design and interaction -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- JavaScript file for placing bids -->
    <script src="javascript/placebid.js"></script>

    <title>Bid_details</title>
</head>

<body>
    <!-- Header section -->
    <?php include 'Components/header.php'; ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="row">
                        <?php
                        if ($bid_data) {
                            foreach ($bid_data as $bid) {
                                $auction_id = $bid['auction_id'];
                                $product_name = $bid['product_name'];
                                $product_image = $bid['image_url'];
                                $product_description = $bid['description'] ? htmlspecialchars($bid['description']) : 'No description available for this product.';
                                $product_detail = $bid['product_detail'] ? htmlspecialchars($bid_data['product_detail']) : 'No details are available for this product.';
                                // if (!empty($bid['bid_amount'])) {
                                //     $current_bid = $bid['bid_amount'];
                                //     $bidder_username = $bid['username']; // Lấy tên người đấu giá
                                // } else {
                                //     $current_bid = $bid['starting_price']; // Sử dụng giá khởi điểm từ bảng products
                                //     $bidder_username = 'No bids yet'; // Hoặc bạn có thể để lại thông báo thích hợp
                                // }
                                $bid_time = $bid['bid_time'];
                                $end_time = $bid['end_time'];
                                $start_time = $bid['start_time'];
                                $formatted_start_time = date('F j, Y g:i a', strtotime($start_time));
                                $days_left = caculate_days_left_bid($start_time, $end_time);
                                if (empty($start_time)) {
                                    $bid_display = "Buyout Price ";
                                    $current_bid = $bid['buyout_price'];
                                } elseif (new DateTime() < new DateTime($start_time)) {
                                    $bid_display = "Starting Price: ";
                                    $current_bid = $bid['starting_price'];
                                    $status = 'Starts in ' . date_diff(new DateTime(), new DateTime($start_time))->format('%d days, %h hours, %i minutes') . '.';
                                    $status_end = 'Starts on ' . date('F j, Y g:i a', strtotime($start_time));
                                } elseif (new DateTime() > new DateTime($end_time)) {
                                    $bid_display = "Winning price ";
                                    $current_bid = $bid['current_bid'];
                                    $status = 'Ended ' . date_diff(new DateTime($end_time), new DateTime())->format('%d days, %h hours, %i minutes') . ' ago.';
                                    $status_end = 'Ended on ' . date('F j, Y g:i a', strtotime($end_time));
                                } else {
                                    $bid_display = "Current Bid ";
                                    $current_bid = $bid['current_bid'];
                                    $status = 'Ends in ' . date_diff(new DateTime(), new DateTime($end_time))->format('%d days, %h hours, %i minutes') . '.';
                                    $status_end = 'Close on ' . date('F j, Y g:i a', strtotime($end_time));
                                }
                        ?>
                                <!-- Displaying product details -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <p class="fs-1 fw-light"><?php echo htmlspecialchars($product_name) ?></p>
                                        <p class="fs-6 fc-999999">Start from <?php echo htmlspecialchars($formatted_start_time) ?></p>
                                    </div>
                                    <div class="mt-4">
                                        <p class="fs-4 fw-light color0028BA"><?php echo htmlspecialchars($status) ?></p>
                                    </div>
                                    <img src="<?php echo htmlspecialchars($product_image) ?>" alt="sanpham" class="img-fluid mt-3" />
                                    <p class="fs-4 fw-light fc-999999">Product detail:</p>
                                    <p class="fs-6 "><?php echo $product_description ?></p>

                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <!-- Bid section  -->
                                    <div class="row border shadow-sm p-4 mb-5 bg-body-tertiary rounded">
                                        <p class="fs-5 fc-666666 text-uppercase"><?php echo htmlspecialchars($bid_display) ?></p>
                                        <p class="mb-0 fc-0053b8 fw-bolder" style="font-size: 4rem;">$ <?php echo htmlspecialchars($current_bid) ?></p>

                                        <?php if (new DateTime() < new DateTime($start_time)): ?>

                                            <div class="row">
                                                <div class="row">
                                                    <!-- No select or buttons for not started auction -->
                                                    <p class="fs-4 text-danger">This auction hasn't started.</p>
                                                </div>
                                            </div>
                                        <?php elseif (new DateTime() > new DateTime($end_time)): ?>
                                            <div class="row">
                                                <!-- No select or buttons for ended auction -->
                                                <p class="fs-4 text-danger">This auction has ended.</p>
                                            </div>
                                        <?php else: ?>
                                            <p class="fs-6 mb-1 fc-666666 text-uppercase fw-light">Step price</p>
                                            <p class="fs-2 fw-light">$ 1000</p>
                                            <div class="row">
                                                <!-- Dropdown to choose a bid amount -->
                                                <select class="form-select" id="bid_amount" aria-label="Default select example">
                                                    <option selected>Choose your bid</option>
                                                    <?php
                                                    $max_bid = 1000000;
                                                    for ($bid = $current_bid + 1000; $bid <= $max_bid; $bid += 1000) {
                                                        echo '<option value="' . $bid . '">$' . htmlspecialchars($bid) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <!-- <p class="fs-6 fc-999999">Last bid placed by: <?php echo $bidder_username; ?></p>
                                                    <p class="fs-6 fc-999999">Bid Time: <?php echo $bid_time ? date('F j, Y g:i a', strtotime($bid_time)) : 'No bids yet'; ?></p> -->
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <a class="btn btn-outline-primary bid-size px-5" id="place-bid">
                                                        <p class="fs-4 mx-3 my-2 ">Place bid</p>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="btn btn-primary bid-size px-5">
                                                        <p class="fs-4 mx-3 my-2 ">Buy out</p>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Hidden input to store auction_id -->
                                        <input type="hidden" id="auction-id" value="<?php echo $auction_id; ?>">
                                        <div class="row mt-5 span">
                                            <div>
                                                <img src="images/smallicon.jpg" class="me-4" />Buy confidently with our
                                                <strong>Buyer Protection</strong>
                                            </div>
                                            <div class="mt-2">
                                                <img src="images/smallicon2.jpg" class="me-3" /> Buyer Protection fee: 9% +
                                                $3
                                            </div>
                                            <div class="mt-2">
                                                <img src="images/smallicon1.jpg" class="me-3" /> <?php echo htmlspecialchars($status_end) ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            }
                        } else {
                            echo '<p>No auction found for this product.</p>';
                        }
                            ?>
                            <!-- Buyer Protection -->
                            <div class="row border shadow-sm p-4 mb-5 bg-body-tertiary rounded">
                                <p class="fs-2 fc-17b100 text-uppercase">bitspirit Buyer Protection</p>
                                <div class="col-7">
                                    <div>
                                        <img src="images/smaillicon4.jpg" class="me-4" />Your payment is safe
                                    </div>

                                    <div class="mt-5">
                                        <img src="images/smallicon5.jpg" class="me-4 " />All objects are quality checked

                                    </div>

                                    <div class=" mt-5">
                                        <img src="images/smallicon6.jpg" class="me-4" />All sellers are verified

                                    </div>
                                </div>
                                <div class="col-5">
                                    <img src="images/largeicon.jpg" class="img-fluid" />
                                </div>
                            </div>
                                </div>
                    </div>
                    <div class="row mb-5">
                        <p class="fs-4 fw-light">Shipping</p>
                        <p class="fs-6">We offer various shipping methods including Standard (5-7 business days), Express (2-3 business days), and Overnight (next business day), with costs ranging from $5.99 to $19.99, and free shipping on orders over $50. International shipping is available to select countries with varying costs and delivery times. Orders are processed within 1-2 business days, and you’ll receive a tracking number via email once shipped. Note that we do not ship to P.O. Boxes or APO/FPO addresses, and some items may have restrictions. Returns or exchanges are accepted within 30 days of receipt, as per our Returns Policy.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer section -->
        <?php include 'Components/footer2.php'; ?>
    </main>
</body>

</html>