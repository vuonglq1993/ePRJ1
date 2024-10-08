<?php
session_start();
include_once 'functions/db.php';
if (isset($_POST['login'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if (empty($email) || empty($password)) {
        echo "Please fill in all fields";
        exit;
    }
    $conn = connect();
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone'];
        $sql_update_login = "UPDATE users SET loggedIn = 1, lastLoggedIn = NOW() WHERE user_id = ?";
        $stmt_update = $conn->prepare($sql_update_login);
        $stmt_update->bind_param("i", $user['user_id']);
        if($stmt_update->execute()){
            header("Location: index.php");
        exit();
        } else {
            echo "Error updating login status" . $stmt_update -> error;
        }
        $stmt_update->close();
    } else {
        echo "Invalid email or password";
    }
    $stmt->close();
    $conn->close();
}
