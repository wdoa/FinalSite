<?php
	$servername ='localhost';
	$username='anniebot';
								$password='123456';
								$dbname='anniebot';
	$con= new mysqli($servername,$username,$password, $dbname);
	if ($con->connect_error){
		die('error');
	}

	$uName = $_POST['login'];
	$ps = $_POST['ps'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$au = 2;
	$sql="SELECT * FROM users ";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			if($row['login']==$uName){
				echo 'false';
                                exit;
			}
			
			
		}
		require 'db_connect.php';
	
	$db = new DB_CONNECT();

			$sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES (NULL, '$uName', '$ps', '$fn', '$ln', '$au', CURRENT_TIMESTAMP);";
	mysql_query($sql) or die(mysql_error());
			echo 'notexist';

	}