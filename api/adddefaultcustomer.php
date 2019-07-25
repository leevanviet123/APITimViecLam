<?php
require_once './connection.php';
if($isOK){
	$id_account = $_REQUEST['id_account'];

	$sql = "INSERT INTO `customer`(`id_acount`, `avatar`, `name`, `address`, `email_contact`, `phone`) VALUES ({$id_account},N'default.jpg',N'',N'',N'', -1)";
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

