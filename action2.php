
<?php
require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$titl = $_GET['title'];
	$urli = $_GET['url_img'];


	$sql = "INSERT INTO `categories` (`id`, `title`, `url_img`) VALUES (NULL, '$titl', '$urli');";
	mysql_query($sql) or die(mysql_error());

	header("Location: p2.php");

	?>