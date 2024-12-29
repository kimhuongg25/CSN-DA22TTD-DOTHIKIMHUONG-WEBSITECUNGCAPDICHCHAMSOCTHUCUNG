<?php
$host = "localhost"; // Tên máy chủ
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL (nếu có)
$database = "my_project"; // Tên cơ sở dữ liệu

$con = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>