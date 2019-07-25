<?php
require_once './connection.php';
if($isOK){

	$sql = "select * from account";
	$result = mysqli_query($connect, $sql);
	if($result){
		echo json_encode($mess_susccess);
		echo($result);
	}
	else
	{
		echo json_encode($mess_failure);
	}
	
}
?>
