<?php
require_once './connection.php';
if($isOK){
	$newuser = $_REQUEST['txtname'];
	$newpass = $_REQUEST['txtpassword'];
	$newname = $_REQUEST['fname'];
	$newemail = $_REQUEST['email'];

	$sql = "INSERT INTO `account` (`id_account`, `username`, `password`, `name_displayed`, `email_restore`) VALUES (NULL, '{$newuser}', '{$newpass}', N'{$newname}', '{$newemail}')";
	$result = mysqli_query($connect, $sql);
	if($result){
		echo json_decode($mess_suscess);
	}
	else
	{
		echo json_encode($mess_failure);
	}
	
}
?>

