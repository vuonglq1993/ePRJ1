<?php
function connect(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function select($sql, $params = []){
    $conn = connect();
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    if (!empty($params)) {
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        $result = $conn->query($sql);
    }
    if ($result === false) {
        die("Error executing query: " . $conn->error);
    }
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    $conn->close();
    return $data;
}

function findById($sql){
    $data = select($sql);
    if(count($data) > 0){
        return $data[0];
    }else{
        return 0;
    }
}

