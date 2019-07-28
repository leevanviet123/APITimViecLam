<?php
require_once './connection.php';
if($isOK){
	$id_account = $_REQUEST['id_account'];
	$id_account = $_REQUEST['name_displayed'];

	$sql = "INSERT INTO `customer`(`id_acount`, `avatar`, `name_displayed`, `address`, `email_contact`, `phone`) VALUES ({$id_account},N'default.jpg',N'{$name_displayed}',N'',N'', N'')";
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

