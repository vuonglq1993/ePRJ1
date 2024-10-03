<?php
    include_once 'db.php';
function search($searchTerm){
    $conn = connect();
    $sql = "SELECT a.product_id, a.current_bid, a.start_time, a.end_time, p.product_name, p.image_url
            FROM auctions a
            JOIN products p ON a.product_id = p.product_id
            WHERE p.product_name LIKE ? 
            ORDER BY a.start_time ASC";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $searchTerm = "%$searchTerm%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
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
    if ($now < $start_date_time) {
        return "Auction starts in " . $start_date_time->diff($now)->format('%a days');
    } elseif ($now > $end_date_time) {
        return "Auction ended" . $now->diff($end_date_time)->format('%a days ago');
    } else {
        return "Auction ends in " . $now->diff($end_date_time)->format('%a days');
    }
}