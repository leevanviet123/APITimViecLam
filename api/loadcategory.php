<?php

require_once './connection.php';
if ($isOK) {
	
    $sql = "SELECT * FROM category";    
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
