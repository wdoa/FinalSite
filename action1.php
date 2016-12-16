
<?php
	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$log = $_GET['login'];
	$fn = $_GET['fname'];
	$ln = $_GET['lname'];
	$au = $_GET['au'];
	$date = $_GET['date'];
	$ps = $_GET['pass'];

	$sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES (NULL, '$log', '$ps', '$fn', '$ln', '$au', '$date');";
	mysql_query($sql) or die(mysql_error());

	header("Location: p1.php");

	?>