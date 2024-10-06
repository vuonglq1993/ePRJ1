<?php 
function connect(){
    $config = file_get_contents("app_setting.json");// string
    $config = json_decode($config);
    $host = $config->host;
    $user = $config->user;
    $pass = $config->pass;
    $db = $config->db;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    mysqli_set_charset($conn, "utf8mb4_general_ci");
    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->error){
        die("Connect refused!");
    }
    return $conn;
}

function select($sql, $params = [])
{
    $conn = connect(); // Kết nối đến cơ sở dữ liệu
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Kiểm tra và gán tham số
    if (!empty($params)) {
        $types = str_repeat('s', count($params)); // Giả sử tất cả tham số là chuỗi
        $stmt->bind_param($types, ...$params);
    }

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    $result = $stmt->get_result();
    if ($result === false) {
        die("Error getting result: " . $stmt->error);
    }

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $stmt->close();
    $conn->close();

    return $data; // Trả về mảng dữ liệu
}

function insert($sql, $params = [])
{
    $conn = connect(); 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Kiểm tra và gán tham số
    if (!empty($params)) {
        $types = '';
        foreach ($params as $param) {
            if (is_int($param)) {
                $types .= 'i'; // integer
            } elseif (is_float($param)) {
                $types .= 'd'; // double (số thập phân)
            } elseif (is_string($param)) {
                $types .= 's'; // string
            } else {
                $types .= 'b'; // blob
            }
        }
        $stmt->bind_param($types, ...$params);
    }

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }
    $insertedId = $conn->insert_id;

    $stmt->close();
    $conn->close();

    return $insertedId;
}

function findById($sql,$params = []){
    $data = select($sql, $params);
    if(count($data) > 0){
        return $data[0];
    }else{
        return 0;
    }
}

