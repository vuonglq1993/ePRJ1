<?php
include_once 'functions/db.php';

function get_auction_data($user_id, $category_id = 0)
{
    if ($category_id > 0) {
        $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_id, p.product_name, p.buyout_price, p.image_url, ul.id AS liked
                FROM auctions a
                RIGHT JOIN products p ON a.product_id = p.product_id
                LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
                WHERE p.category_id = $category_id
                ORDER BY 
                CASE
                    WHEN a.auction_id IS NULL THEN 4    -- Sản phẩm chưa được đấu giá
                    WHEN NOW() > a.end_time THEN 3      -- Sản phẩm đã kết thúc
                    WHEN NOW() < a.start_time THEN 2    -- Sản phẩm chưa bắt đầu
                    ELSE 1                              -- Sản phẩm đang diễn ra
                END,
                CASE
                    WHEN NOW() > a.end_time THEN TIMESTAMPDIFF(SECOND, a.end_time, NOW()) -- Sắp xếp theo thời gian đã kết thúc
                    WHEN NOW() <= a.end_time THEN TIMESTAMPDIFF(SECOND, NOW(), a.end_time) -- Sắp xếp theo thời gian còn lại
                    ELSE 0
                END ASC,
                a.start_time ASC"; //Sắp xếp theo thời gian bắt đầu
    } else {
        $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_id, p.product_name, p.buyout_price, p.image_url, ul.id AS liked
                FROM auctions a
                RIGHT JOIN products p ON a.product_id = p.product_id
                LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
                ORDER BY 
                CASE
                    WHEN a.auction_id IS NULL THEN 4    -- Sản phẩm chưa được đấu giá
                    WHEN NOW() > a.end_time THEN 3      -- Sản phẩm đã kết thúc
                    WHEN NOW() < a.start_time THEN 2    -- Sản phẩm chưa bắt đầu
                    ELSE 1                              -- Sản phẩm đang diễn ra
                END,
                CASE
                    WHEN NOW() > a.end_time THEN TIMESTAMPDIFF(SECOND, a.end_time, NOW()) -- Sắp xếp theo thời gian đã kết thúc
                    WHEN NOW() <= a.end_time THEN TIMESTAMPDIFF(SECOND, NOW(), a.end_time) -- Sắp xếp theo thời gian còn lại
                    ELSE 0
                END ASC,
                a.start_time ASC"; //Sắp xếp theo thời gian bắt đầu
    }
    return select($sql, [$user_id]);
}
function format_price($price)
{
    return '$' . rtrim(rtrim(number_format($price, 2), '0'), '.');
}
function caculate_days_left($start_time, $end_time)
{
    $start_date_time = new DateTime($start_time);
    $end_date_time = new DateTime($end_time);
    $now = new DateTime();
    if (empty($start_time)) {
        return "The auction has not started.";
    } else if ($now < $start_date_time) {
        $time_left = $start_date_time->diff($now);
        $days = $time_left->days;
        if ($days > 0) {
            return "Auction start in " . $days . " days";
        } else {
            return "Auction starts in " . $time_left->h . " hours.";
        }
    } elseif ($now > $end_date_time) {
        $time_left = $now->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return "Auction ended " . $days . " days ago";
        } else {
            return "Auction ended " . $time_left->h . " hours ago.";
        }
    } else {
        $time_left = $now ->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return "Auction ends in " . $days . " days";
        } elseif ($time_left->h > 0) {
            return "Auction ends in " . $time_left->h . " hours.";
        } else {
            return "Auction ends in " . $time_left->i . " minutes.";
        }
    }
    
}
function get_trendin_data($user_id)
{
    $sql = "SELECT a.*, p.product_name, p.starting_price, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            ORDER BY 
                CASE
                    WHEN a.auction_id IS NULL THEN 4    -- Sản phẩm chưa được đấu giá
                    WHEN NOW() > a.end_time THEN 3      -- Sản phẩm đã kết thúc
                    WHEN NOW() < a.start_time THEN 2    -- Sản phẩm chưa bắt đầu
                    ELSE 1                              -- Sản phẩm đang diễn ra
                END,
                CASE
                    WHEN NOW() > a.end_time THEN TIMESTAMPDIFF(SECOND, a.end_time, NOW()) -- Sắp xếp theo thời gian đã kết thúc
                    WHEN NOW() <= a.end_time THEN TIMESTAMPDIFF(SECOND, NOW(), a.end_time) -- Sắp xếp theo thời gian còn lại
                    ELSE 0
                END ASC,
                a.start_time ASC"; //Sắp xếp theo thời gian bắt đầu
    $result = select($sql, [$user_id]);
    return $result;
}
function get_product_data($product_id)
{
    if ($product_id > 0) {
        $sql = "SELECT p.*, a.start_time, a.end_time, c.collection_name
            FROM products p
            LEFT JOIN auctions a ON p.product_id = a.product_id
            LEFT JOIN collections c ON p.collection_id = c.collection_id
            WHERE p.product_id = ?"; 
    }
    return findById($sql, [$product_id]);
}