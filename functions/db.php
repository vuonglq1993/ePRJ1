<?php 
function connect(){
    $config = file_get_contents("app_setting.json");// string
    $config = json_decode($config);
    $host = $config->host;
    $user = $config->user;
    $pass = $config->pass;
    $db = $config->db;
    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->error){
        die("Connect refused!");
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

