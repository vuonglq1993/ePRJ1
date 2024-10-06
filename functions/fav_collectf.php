<?php
include_once 'db.php';

function get_fav_data($user_id, $sort_by = 'start_time')
{
    if ($user_id > 0) {
        $valid_sort_options = ['start_time', 'current_bid', 'product_name'];
        if (!in_array($sort_by, $valid_sort_options)) {
            $sort_by = 'start_time';
        }
        $sql = "SELECT ul.user_id, ul.product_id, p.product_id, p.product_name, p.image_url, a.product_id, a.start_time, a.end_time, a.current_bid
                FROM user_likes ul
                JOIN products p ON ul.product_id = p.product_id
                JOIN auctions a ON a.product_id = p.product_id
                WHERE ul.user_id = ?
                ORDER BY $sort_by ASC ";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $fav_auction_data = [];
        while ($row = $result->fetch_assoc()) {
            $fav_auction_data[] = $row;
        }
        $stmt->close();
        $conn->close();
        return $fav_auction_data;
    } else {
        return [];
    }
}

function format_price1($price)
{
    return '$' . rtrim(rtrim(number_format($price, 2), '0'), '.');
}
function caculate_days_left1($start_time, $end_time)
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
            return 'Auction start in' . $days . 'days';
        } else {
            return "Auction starts in " . $time_left->h . " hours.";
        }
    } elseif ($now > $end_date_time) {
        $time_left = $now->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return 'Auction ended' . $days . 'days ago';
        } else {
            return "Auction ended " . $time_left->h . " hours ago.";
        }
    } else {
        $time_left = $now ->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return 'Auction ends in' . $days . 'days';
        } elseif ($time_left->h > 0) {
            return "Auction ends in " . $time_left->h . " hours.";
        } else {
            return "Auction ends in " . $time_left->i . " minutes.";
        }
    }
}

function count_fav_data($user_id)
{
    if ($user_id > 0) {
        $sql = "SELECT COUNT(*) AS total FROM user_likes WHERE user_id = ?";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $row['total'];
    } else {
        return 0;
    }
} 