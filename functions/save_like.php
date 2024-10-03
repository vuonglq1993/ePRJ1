<?php
session_start();
include_once("db.php");

// Get the user ID and product ID
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

if (!$user_id) {
    echo "User not logged in";
    exit;
}

if (!$product_id) {
    echo "Invalid product ID";
    exit;
}

$conn = connect();
$sql_check = "SELECT * FROM user_likes WHERE user_id = ? AND product_id = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("ii", $user_id, $product_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

// If the user hasn't liked the product yet, insert it into the database
if ($result_check->num_rows == 0) {
    $sql_insert = "INSERT INTO user_likes (user_id, product_id) VALUES (?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("ii", $user_id, $product_id);
    if ($stmt_insert->execute()) {
        echo "Product liked";
    } else {
        echo "Error: " . $stmt_insert->error;
    }
    $stmt_insert->close();
} else {
    // If the user has already liked the product, remove the like
    $sql_delete = "DELETE FROM user_likes WHERE user_id = ? AND product_id = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("ii", $user_id, $product_id);
    if ($stmt_delete->execute()) {
        echo "Product unliked";
    } else {
        echo "Error: " . $stmt_delete->error;
    }
    $stmt_delete->close();
}
$stmt_check->close();
$conn->close();
