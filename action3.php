
<?php
require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$log = $_GET['title'];
	$fn = $_GET['id_category'];
	$ln = $_GET['content'];
	$au = $_GET['url_image'];

	$sql = "INSERT INTO `news` (`id`,`title`, `id_category`, `content`, `url_image`) VALUES (NULL, '$log', '$fn', '$ln', '$au');";
	mysql_query($sql) or die(mysql_error());

	header("Location: p3.php");

	?>