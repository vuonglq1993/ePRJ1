<?php
session_start();
include_once("db.php");

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    error_log("Session not found. User not logged in.");
    echo "You are not logged in";
    exit;
} else {
    echo "User is logged in. User ID: " . $_SESSION['user_id'];  // Debug output
}

// Get the user ID and product ID
$user_id = $_SESSION['user_id'];
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
if (!$product_id) {
    echo "Invalid product ID";
    exit;
}

// Connect to the database
$conn = connect();
$sql_check_login = "SELECT loggedIn, lastLoggedIn FROM Users WHERE user_id = ?";
$stmt_check = $conn->prepare($sql_check_login);
$stmt_check->bind_param("i", $user_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();
$user = $result_check->fetch_assoc();
// Check if the user is logged in and the session has not expired (30 minutes limit)
if ($user['loggedIn'] && (time() - strtotime($user['lastLoggedIn']) < 1800)) {
    // Check if the user has already liked this product
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
        // If the user has already liked the product, remove the like (optional)
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
} else {
    // Log the user out if the session has expired or the user is not logged in
    $sql_logout = "UPDATE Users SET loggedIn = 0 WHERE user_id = ?";
    $stmt_logout = $conn->prepare($sql_logout);
    $stmt_logout->bind_param("i", $user_id);
    $stmt_logout->execute();

    echo "Session expired. Please log in again.";
    exit;
}


$stmt_check->close();
$conn->close();
