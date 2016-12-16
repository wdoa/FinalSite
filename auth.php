<?php
session_start();
$login = $_POST['login'];
$password1 = $_POST['password'];

	$flag=0;
	$servername ='localhost';
	$username='anniebot';
								$password='123456';
								$dbname='anniebot';
	$con= new mysqli($servername,$username,$password, $dbname);
	if ($con->connect_error){
		die('error');
	}

	$sql="SELECT * FROM users ";

	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			if($row['login']==$login){
				$flag=1;

				if($row['password']==$password1){
					$_SESSION['login'] = $login;
					$_SESSION['au']=$row['group_au'];
					header("Location: index.php");
					break;
					return;
					
				}else{
					unset($_SESSION['login']);
					header("Location: index.php");
					session_destroy();
					return;
				}
			}
		}}
			if($flag==0){
			unset($_SESSION['login']);
					header("Location: index.php");
					session_destroy();

				}
		

	?>




