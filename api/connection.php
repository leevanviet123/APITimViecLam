<?php

$mess_success = array("id"=>100, "message" => "Thành công"); //"{\"id\":\"100\",\"message\":\"Thanh Cong\"}";
$mess_failure = array("id"=>101, "message" => "Thất bại");
$mess_empty = array("id"=>102, "message" => "Không có dữ liệu");

/// Khai báo tham số kết nối
$host = "localhost";
$user = "root";
$password = "";
$database = "timviecDB";

// Lệnh kết nối CSDL
$connect = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($connect, "utf8"); // Lấy về dữ liệu Unicode

$isOK = false;

// Kiểm tra kết nối
if (mysqli_connect_errno()) {
    echo "Lỗi kết nối: " . mysqli_connect_error();
} else {
    // echo "Kết nối thành cmn công!";
    $isOK = true;
}
