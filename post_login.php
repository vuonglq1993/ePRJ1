<?php
    session_start();
    include_once 'functions/db.php';
    if(isset($_POST['login'])){
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if(empty($email) || empty($password)){
            echo "Please fill in all fields";
            exit;
        }
        $sql = "SELECT * FROM users WHERE email = ?";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        }else{
            echo "Invalid email or password";
        }
        $stmt->close();
        $conn->close();
    }
    