<?php
include_once 'functions/db.php';

if (isset($_POST['register'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
    $address = isset($_POST['address'])? trim($_POST['address']) : null;

    if (empty($username) || empty($email) || empty($password)){
        echo "Please fill all the fields";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid email";
        exit;
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Users (username, email, password, phone, address) VALUES (?, ?, ?, ?, ?)";
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $email, $hashed_password, $phone, $address);
    if ($stmt->execute()){
        header('Location: login.php');
        exit();
    } else {
        echo "Registration failed" . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}