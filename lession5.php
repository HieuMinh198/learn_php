<?php
$servername = "localhost";  
$username = "root"; 
$password = "";  
$database = "ql_khach_hang";  

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("Kết nối MySQL thất bại: " . $conn->connect_error);
// }

// echo "Kết nối MySQL thành công <br>";

// Create
$create = "CREATE TABLE customers(
    id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone CHAR(12) NOT NULL
)";
if($conn -> query($create)=== TRUE){
    echo "Tạo bảng thành công nhé!";
}else{
    echo "Thất bại rồi!". $conn -> error;
}

//Insert
$insert = "INSERT INTO customers VALUES
    (1,'Nông Minh Hiếu', 'hieunongminh@admicro.vn', '0962298198'),
    (2,'Nông Minh A', 'hieunongminh1@admicro.vn', '0962298199'),
    (3,'Nông Minh B', 'hieunongminh2@admicro.vn', '0962298191'),
    (4,'Nông Minh C', 'hieunongminh3@admicro.vn', '0962298192'),
    (5,'Nông Minh D', 'hieunongminh4@admicro.vn', '0962298193')";
if($conn -> query($insert) === TRUE){
    echo "OK nhé!";
}else{
    echo "Thất bại!". $conn -> error; 
}

//Update
$update = "UPDATE customers SET email = 'hieunongminh@vccorp.vn' WHERE id = 1";
if($conn -> query($update) === TRUE){
    echo "OK nhé!";
}else{
    echo "Không ok!". $conn -> error;
}

Delete
$id = 5;
$delete = "DELETE FROM customers WHERE id = $id ";
if($conn -> query($delete) === TRUE){
    echo "Xóa OK!";
}else{
    echo "Xóa không OK:". $conn -> error;
}

//Select
$select = "SELECT * FROM customers WHERE email = 'hieunongminh@vccorp.vn'";
$result = $conn -> query($select);

if($result -> num_rows > 0){ //lặp qua các dòng bản ghi trả về
    while ($row = $result -> fetch_assoc()){
        echo "ID: ". $row["id"]. "<br>";
        echo "Tên: ". $row["name"]. "<br>";
        echo "Email: ". $row["email"]. "<br>";
        echo "SĐT: ". $row["phone"]. "<br>";
    }
}else{
    echo "Không có data!";
}

// Đóng kết nối 
$conn->close();
?>
