<?php
require_once './connection.php';
if($isOK){
	$title = $_REQUEST['Name'];
	$idCustomer = $_REQUEST['id_customer']
	$request = $_REQUEST['Request'];
	$salary = $_REQUEST['salary'];
	$desc = $_REQUEST['descirbe'];
	$interest = $_REQUEST['interest'];
	$number = $_REQUEST['number'];
	$contact = $_REQUEST['contact'];
	$idWork = $_REQUEST['id_work'];

$sql = "INSERT INTO `job`(`id_job`, `id_customer`, `Name`, `Request`, `salary`, `describe`, `interest`, `number`, `contact`, `id_work`) VALUES (NULL,'{$idCustomer}',N'{$title}',N'{$request}',N'{$salary}',N'{$desc}',N'{$interest}','{$number}',N'{$contact}','{$idWork}')";
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
 