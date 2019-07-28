<?php

require_once './connection.php';
if ($isOK) {
	$id_account = $_REQUEST['id_account'];
	
    $sql = "SELECT username, avatar , name_displayed, address, email_contact, phone FROM customer inner join account on account.id_account = customer.id_acount where account.id_account = '{$id_account}'";    
    $result = mysqli_query($connect, $sql);

    // Đọc về dữ liệu    
    // Trả về JSON
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}

?>
