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
                                <p class="ms-2 mb-3"><a href="index.php?cat_id=<?php echo $category['category_id'] ?>"
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
                                                                    <a href="#" class="no-action"
                                                                        data-product-id="<?php echo $product_id; ?>"
                                                                        method="post" onclick="toggleLike(this)">
                                                                        <i
                                                                            class="bi <?php echo $auction['liked'] ? 'bi-heart-fill' : 'bi-heart'; ?>"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <img src="<?php echo htmlspecialchars($image_url) ?>" alt=""
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
                                                <div class="row">
                                                    <div class="col-6 text-start">
                                                        <p class="m-2">
                                                            <?php echo htmlspecialchars($product_name) ?>
                                                        </p>
                                                        <div class="text-dark" style="--bs-text-opacity: .5;">
                                                            <p class="m-2">Acrilyc, Sand on Canvas</p>
                                                            <p class="m-2">90x70cm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <div class="text-dark" style="--bs-text-opacity: .5;">

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
                                        if ($category_id > 0) {
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo '<a class="text-decoration-none p-1" href="index.php?cat_id=' . htmlspecialchars($category_id) . '&page=' . $i . '" class="btn btn-link">' . $i . '</a> ';
                                            }
                                        } else {
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo '<a class="text-decoration-none p-1" href="?page=' . $i . '" class="btn btn-link">' . $i . '</a> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="text-center">
                                        <a href="<?php echo $link; ?> " class="btn seeall">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                            </svg>
                                            See
                                            "<strong><?php echo htmlspecialchars($category_name) ?></strong>"
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
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