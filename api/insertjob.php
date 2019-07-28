<?php
require_once './connection.php';
if($isOK && isset($_REQUEST['title'])&& isset($_REQUEST['numberPerson'])){
	$title = $_REQUEST['title'];
	$requestJob = $_REQUEST['requestJob'];
	$salary = $_REQUEST['salary'];
	$desc = $_REQUEST['description'];
	$interest = $_REQUEST['interest'];
	$skill = $_REQUEST['skill'];
	$exp= $_REQUEST['exp'];
	$number = $_REQUEST['numberPerson'];
	$contact = $_REQUEST['contact'];
	
	
$sql = "INSERT INTO `job`(`id_customer`, `Name`, `Request`, `salary`, `describe`,`exp`, `interest`, `number`, `contact`, `id_category` ) VALUES ((SELECT customer.id_custom from customer INNER JOIN account on customer.id_acount = account.id_account WHERE account.id_account = 30),N'{$title}',N'{$requestJob}',N'{$salary}',N'{$desc}',N'{$exp}',N'{$interest}','{$number}',N'{$contact}','{$skill}')";
	
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
 