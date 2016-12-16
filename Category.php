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
			$idcat = $_POST['idcat'];

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

		$sql="SELECT * FROM categories ";
		$h=0;
		$result=$con->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				//if($row['id']==$idcat){
				$h+=1;
				if($h==$idcat){
				?>
				<div class="lblock">
				<div class="cICont">
				<img class="cImg" src="<?php echo $row['url_img']; ?>" />   
				</div>
				<div class="cText"><?php echo $row['title']; ?></div>
				</div>
			<?php
		}
		}
	}

		$sql="SELECT * FROM news ";
		$result=$con->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				if($row['id_category']==$idcat){
				?>
				<div class="lblock">
				<div class="cICont">
				<img class="cImg" src="<?php echo $row['url_image']; ?>" />   
				</div>
				<div class="cText">
				<p class="category2 aa"><?php echo $row['title']; ?></p></div>
				</div>
			<?php
		}
	}}

	?>
					<form method="POST" action="New.php" id="myForm2">
								<input type="hidden"  name="idn" id="idn" value="" >
								<input type="hidden"  name="idc" id="idc" value="<?php echo $idcat?>" >
					</form>

</div>
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
