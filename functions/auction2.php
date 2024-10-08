<?php
include_once 'db.php';

function get_completed_auctions_data($user_id)
{
    $sql = "SELECT a.*, p.product_name, p.starting_price, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            WHERE a.end_time < NOW()
            ORDER BY a.end_time DESC";
    $result = select($sql, [$user_id]);
    return $result;
}
function get_ongoing_auctions_data($user_id)
{
    $sql = "SELECT a.*, p.product_name, p.starting_price, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            WHERE a.end_time >= NOW()
            ORDER BY a.end_time ASC";
    $result = select($sql, [$user_id]);
    return $result;
}
function get_incoming_auctions_data($user_id)
{
    $sql = "SELECT a.*, p.product_name, p.starting_price, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            WHERE NOW() < a.start_time  
            ORDER BY a.start_time ASC";
    $result = select($sql, [$user_id]);
    return $result;
}

function get_sponsored_auctions_data($user_id)
{
    $sql = "SELECT a.*, p.product_name, p.starting_price, p.image_url, ul.id AS liked
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON a.product_id = ul.product_id AND ul.user_id = ?
            WHERE p.product_name LIKE '%rolex%'
            AND NOW() < a.end_time 
            ORDER BY a.end_time ASC";
    $result = select($sql, [$user_id]);
    return $result;
}
function format_price2($price)
{
    return '$' . rtrim(rtrim(number_format($price, 2), '0'), '.');
}
function caculate_days_left2($start_time, $end_time)
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
        $time_left = $now->diff($end_date_time);
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
