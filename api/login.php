<?php

/*
 * Exam: http://localhost:1080/bkap-demo-login/index.php?username=minhvt&password=123456
 */
// echo "Xin chào!";

require_once './connection.php';

// Nếu kết nối thành công
if ($isOK && isset($_REQUEST['username'])) {
    $param1 = $_REQUEST['username'];
    $param2 = $_REQUEST['password'];

    $sql = "SELECT account.id_account, account.username, account.password, account.name_displayed, customer.avatar,customer.phone, customer.address, customer.email_contact FROM `account` inner join customer on account.id_account = customer.id_acount WHERE account.username = '{$param1}' AND account.password = '{$param2}'";
    $result = mysqli_query($connect, $sql);

    // Đọc về dữ liệu    
    // Trả về JSON
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}

