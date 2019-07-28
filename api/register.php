<?php
require_once './connection.php';
if($isOK){
	$newuser = $_REQUEST['username'];
	$newpass = $_REQUEST['password'];
	$newemail = $_REQUEST['email'];

	$sql = "INSERT INTO `account` (`username`, `password`, `email_restore`) VALUES ('{$newuser}', '{$newpass}', '{$newemail}')";
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

