<?php
include_once 'functions/db.php';

function get_auction_data($category_id = 0, $user_id)
{
    if ($category_id > 0) {
        $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_name, p.image_url, ul.id AS liked
                FROM auctions a
                JOIN products p ON a.product_id = p.product_id
                LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
                WHERE p.category_id = $category_id
                ORDER BY a.start_time ASC";
    } else {
        $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_name, p.image_url, ul.id AS liked
                FROM auctions a
                JOIN products p ON a.product_id = p.product_id
                LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
                ORDER BY a.start_time ASC";
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
    if ($now < $start_date_time) {
        return "Auction starts in " . $start_date_time->diff($now)->format('%a days');
    } elseif ($now > $end_date_time) {
        return "Auction ended" . $now->diff($end_date_time)->format('%a days ago');
    } else {
        return "Auction ends in " . $now->diff($end_date_time)->format('%a days');
    }
}
function get_trendin_data($user_id)
{
    $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_name, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            ORDER BY a.start_time ASC";
    $result = select($sql, [$user_id]);
    return $result;
}
