<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<?php session_start();
	?>
		<?php include 'login.php' ?>
	<div class="fon-test">
	</div>
	<!--<div class="container clearfix">-->
		<div class="main">
			<?php include 'test.php' ?>
		<div class="content">
			<?php 
			$idn = $_POST['idn'];
			$idc = $_POST['idc'];
			?>
			
		</div>
	<div class="content-table">
		<?php
		$servername ='localhost';
		$username='anniebot';
		$password='123456';
		$dbname='anniebot';
		$con= new mysqli($servername,$username,$password, $dbname);
		if ($con->connect_error){
			die('error');
		}
		$cur=0;
		
		$sql="SELECT * FROM news ";
		$result=$con->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				if($row['id_category']==$idc){
					$cur+=1;
				if($cur==$idn){
				?>
				<div class="lblock">
				<div class="cICont">
				<img class="cImg" src="<?php echo $row['url_image']; ?>" />   
				</div>
				<div class="cText">
				<?php echo $row['title']; ?></div>
				</div>
				<p><?php echo $row['content']; ?></p>
			<?php
		}}
	}}

	?>

	</div>
	<footer>
	</footer>
	</body>
	<script src="images.js"></script>
	<?php if (isset($_SESSION['login'])){ ?>
			<?php } else{ ?> 
			<script src="log.js"></script>
		<?php } ?>
</html>
