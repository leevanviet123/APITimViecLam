<?php

require_once './connection.php';
if ($isOK) {
	
    $sql = "SELECT job.id_job, job.id_category, customer.avatar, customer.name_displayed, job.Name, job.location, job.salary, job.date_post FROM job INNER JOIN customer on customer.id_custom = job.id_customer";    
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
