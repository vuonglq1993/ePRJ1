<?php
    include_once 'db.php';
function search($searchTerm, $user_id){
    $conn = connect();
    $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, a.auction_id, p.product_id, p.product_name, p.buyout_price, p.image_url, ul.id AS liked
            FROM auctions a
            RIGHT JOIN products p ON a.product_id = p.product_id
            LEFT JOIN user_likes ul ON p.product_id = ul.product_id AND ul.user_id = ?
            WHERE p.product_name LIKE ? 
            ORDER BY a.start_time ASC";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $searchTerm = '%' . $searchTerm . '%';
    $stmt->bind_param("is",$user_id, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    $stmt->close();
    $conn->close();
    return $data;
}
function format_price_search($price)
{
    return '$' . rtrim(rtrim(number_format($price, 2), '0'), '.');
}
function caculate_days_left_search($start_time, $end_time)
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
            return 'Auction start in ' . $days . ' days';
        } else {
            return "Auction starts in " . $time_left->h . " hours.";
        }
    } elseif ($now > $end_date_time) {
        $time_left = $now->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return 'Auction ended ' . $days . ' days ago';
        } else {
            return "Auction ended " . $time_left->h . " hours ago.";
        }
    } else {
        $time_left = $now ->diff($end_date_time);
        $days = $time_left->days;
        if ($days > 0) {
            return 'Auction ends in ' . $days . ' days';
        } elseif ($time_left->h > 0) {
            return "Auction ends in " . $time_left->h . " hours.";
        } else {
            return "Auction ends in " . $time_left->i . " minutes.";
        }
    }
}