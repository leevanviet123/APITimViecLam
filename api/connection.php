<?php
$mess_susccess = array("id"=>100, "message"=>"Thành công");
$mess_failure = array("id"=>101, "message"=>"Thất bại");
$mess_empty = array("id"=>102, "message"=>"Không có dữ liệu");
// khai báo kết nối
$host = "localhost";
$user = "root";
$password = "";
$database = "timviecdb";
//kết nối tới csdl
$connect = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($connect,"utf8");

$isOK = false;

if (mysqli_connect_error()) {
	echo "lỗi kết nối: ".mysqli_connect_error();
}else
{
	
	$isOK = true;
}

?>