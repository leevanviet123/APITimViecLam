<?php
require_once './connection.php';
if($isOK){
	$newuser = $_REQUEST['username'];
	$newpass = $_REQUEST['password'];
	$newname = $_REQUEST['name_display'];
	$newemail = $_REQUEST['email'];

	$sql = "INSERT INTO `account` (`username`, `password`, `name_displayed`, `email_restore`) VALUES ('{$newuser}', '{$newpass}', N'{$newname}', '{$newemail}')";
	$result = mysqli_query($connect, $sql);
	if($result){
		echo json_encode($mess_susccess);
	}
	else
	{
		echo json_encode($mess_failure);
	}
	
}
?>

