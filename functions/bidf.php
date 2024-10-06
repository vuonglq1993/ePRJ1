<?php
include_once 'db.php';
function get_bid_data($auction_id)
{
    $sql = "SELECT a.*, p.product_name, p.image_url, p.description, p.product_detail, p.starting_price, p.buyout_price, b.bid_amount, b.bidder_id, b.bid_time, u.username
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            LEFT JOIN bids b ON a.auction_id = b.auction_id 
            LEFT JOIN users u ON b.bidder_id = u.user_id
            WHERE a.auction_id = ?";
    return select($sql, [$auction_id]);
}

function get_bids_for_auction($auction_id)
{
    $sql = "SELECT * FROM Bids WHERE auction_id = ?";
    return select($sql, [$auction_id]); 
}
function format_price_bid($price)
{
    return '$' . rtrim(rtrim(number_format($price, 2), '0'), '.');
}
function caculate_days_left_bid($start_time, $end_time)
{
    $start_date_time = new DateTime($start_time);
    $end_date_time = new DateTime($end_time);
    $now = new DateTime();
    if (empty($start_time)) {
        return "The auction has not started.";
    } else if ($now < $start_date_time) {
        return "Auction starts in " . $start_date_time->diff($now)->format('%a days.');
    } elseif ($now > $end_date_time) {
        return "Auction ended " . $now->diff($end_date_time)->format('%a days ago.');
    } else {
        return "Auction ends in " . $now->diff($end_date_time)->format('%a days.');
    }
    
}
