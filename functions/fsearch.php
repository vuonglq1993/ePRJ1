<?php
    include_once 'db.php';
function searche($searchTerm){
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