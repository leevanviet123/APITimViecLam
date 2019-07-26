<?php
require_once './connection.php';
if($isOK){
	$id_account = $_REQUEST['id_account'];
	$name_displayed = $_REQUEST['name_displayed'];
	$phone = $_REQUEST['phone'];
	$email_contact = $_REQUEST['email_contact'];
	$address = $_REQUEST['address'];

	$sql = "UPDATE customer inner join account on account.id_account = customer.id_acount set account.name_displayed = N'{$name_displayed}', customer.address = N'{$address}', customer.email_contact = '{$email_contact}', customer.phone = '{$phone}' where account.id_account = {$id_account}";
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
