<?php
session_start();
//check to see if user has logged in with a valid password
include('DBConnection.php');

//$task_id = $_SESSION['task_id'];
$task_id = $_GET['id'];

	

	$query ="UPDATE tasktbl SET status = 'Completed' where task_id = '$task_id'";
	$result = mysql_query($query) or mysql_error();

header('Location: view_task.php');
?>