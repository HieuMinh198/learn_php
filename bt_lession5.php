<?php
$host = 'localhost';
$db_name = 'ql_khach_hang';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tạo bảng "customers"
    $query = "CREATE TABLE customers (
        id INT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255),
        phone VARCHAR(255)
    )";


    // Tạo bảng "orders"
    $query = "CREATE TABLE orders (
        id INT PRIMARY KEY,
        customer_id INT,
        total_amount DECIMAL(10, 2),
        order_date DATE,
        FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE
    )";


    // Sửa thông tin khách hàng
    $query = "UPDATE customers SET name = 'Khách hàng A', email = 'customerA@example.com' WHERE id = 1";
    $conn->exec($query);
    echo "Sửa thông tin khách hàng thành công<br>";

    // Xoá khách hàng
    $query = "DELETE FROM customers WHERE id = 5";
    $conn->exec($query);
    echo "Xoá khách hàng thành công<br>";

    // Lấy danh sách khách hàng có email là 'example@gmail.com'
    $query = "SELECT * FROM customers WHERE email = 'example@gmail.com'";
    $result = $conn->query($query);
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . ", Phone: " . $row['phone'] . "<br>";
        }
    } else {
        echo "Không có khách hàng có email là 'example@gmail.com'<br>";
    }


    $query = "INSERT INTO customers (id, name, email, phone) VALUES
              (1, 'John Doe', 'john@example.com', '123456789'),
              (2, 'Jane Smith', 'jane@example.com', '987654321'),
              (3, 'David Johnson', 'david@example.com', '555555555'),
              (4, 'Sarah Wilson', 'sarah@example.com', '111111111'),
              (5, 'Michael Brown', 'michael@example.com', '999999999')";
    
    $conn->exec($query);
    


    // Thêm đơn hàng
    $query = "INSERT INTO orders (id, customer_id, total_amount, order_date) VALUES (24, 3, 100.50, '2023-06-12')";
    $conn->exec($query);
    echo "Thêm đơn hàng thành công<br>";

    Lấy danh sách đơn hàng của khách hàng có ID là 3
    $id = 3;
    $query = "SELECT * FROM orders WHERE customer_id = $id";
    $result = $conn->query($query);
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . ", Customer ID: " . $row['customer_id'] . ", Total Amount: " . $row['total_amount'] . ", Order Date: " . $row['order_date'] . "<br>";
        }
    } else {
        echo "Không có đơn hàng cho khách hàng có ID là ". $id. "<br>";
    }

    

    $query = "SELECT customers.id, customers.name, orders.id AS order_id, orders.total_amount, orders.order_date 
        FROM customers 
        JOIN orders ON customers.id = orders.customer_id";
    $result = $conn->query($query);
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "Customer ID: " . $row['id'] . ", Customer Name: " . $row['name'] . ", Order ID: " . $row['order_id'] . ", Total Amount: " . $row['total_amount'] . ", Order Date: " . $row['order_date'] . "<br>";
        }
    } else {
        echo "Không có khách hàng hoặc đơn hàng<br>";
    }


    $query = "SELECT DISTINCT email FROM customers";
    $result = $conn->query($query);
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "Không có email khách hàng<br>";
    }
    

} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>