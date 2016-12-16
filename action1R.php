
<?php
	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$id= $_GET['num'];
	echo $id;
	$log = $_GET['login1'];
echo $log;
	$fn = $_GET['fname1'];
	$ln = $_GET['lname1'];
	$au = $_GET['au1'];
	$date = $_GET['date1'];
	$ps = $_GET['pass1'];
	$eddel= $_GET['eddel'];

/*
	$sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES (NULL, '$log', '$ps', '$fn', '$ln', '$au', '$date');";*/
// 	mysql_query($sql) or die(mysql_error());

if($eddel=="ed"){
	$sql = "
		UPDATE `users`
		SET `login`='$log',`password` ='$ps', `first_name`='$fn', `last_name`='$ln', `group_au`='$au'
		WHERE `user_id`='$id';";
	
}else{
	echo $id;
	$sql = "
	DELETE FROM `users`
	WHERE `user_id`='$id';";
}
mysql_query($sql) or die(mysql_error());
	header("Location: p1.php");

	?>