<?php
	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$id= $_GET['num'];
	echo $id;
	$titl = $_GET['title1'];
	$urli = $_GET['url_img1'];
	$eddel= $_GET['eddel'];

if($eddel=="ed"){
	$sql = "
		UPDATE `categories`
		SET `title`='$titl',`url_img` ='$urli'
		WHERE `id`='$id';";
	
}else{
	echo $id;
	$sql = "
	DELETE FROM `categories`
	WHERE `id`='$id';";
}
mysql_query($sql) or die(mysql_error());
	header("Location: p2.php");

	?>