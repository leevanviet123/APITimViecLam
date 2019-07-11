<?php
require_once './conect.php';
if($isOK && empty($_REQUES('username'))){
	$newuser = $_REQUES['username'];
	$newpass = $_REQUES['password'];
	$newname = $_REQUES['name_display'];
	$newemail = $_REQUES['email_restore'];

	$sql = "INSERT INTO `account`( `username`, `password`, `name_displayed`, `email_restore` ) VALUES ('$newuser','$newpass','$newname','newemail')";
	$result = mysqli_query($connect, $sql);
}
 $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
 ?>
