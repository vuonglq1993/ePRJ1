<?php
function connect(){
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "test";
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function select($sql){
    $conn = connect();
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        $data = 0;
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

