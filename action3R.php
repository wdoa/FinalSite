
<?php
	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$id= $_GET['num'];
	echo $id;
	$log = $_GET['title1'];
	$fn = $_GET['id_category1'];
	$ln = $_GET['content1'];
	$au = $_GET['url_image1'];
	$eddel= $_GET['eddel'];

if($eddel=="ed"){
	$sql = "
		UPDATE `news`
		SET `title`='$log', `id_category`='$fn', /*`content`='$ln',*/ `url_image`='$au'
		WHERE `id`='$id';";
	
}else{
	echo $id;
	$sql = "
	DELETE FROM `news`
	WHERE `id`='$id';";
}
mysql_query($sql) or die(mysql_error());
	header("Location: p3.php");

	?>