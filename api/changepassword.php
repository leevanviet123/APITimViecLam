<?php
require_once './connection.php';
if($isOK){
	$username = $_REQUEST['username'];
	$oldpassword = $_REQUEST['oldpassword'];
	$newpassword = $_REQUEST['newpassword'];

	$sql = "select change_password('{$username}' , '{$oldpassword}', '{$newpassword}')";
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
