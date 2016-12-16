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
		$result=$con->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				?>
				<div class="lblock">
				<div class="cICont">
				<img class="cImg" src="<?php echo $row['url_img']; ?>" />   
				</div>

				<div class="cText">
				<!--<a href="Category.php" id="category"><?php echo $row['title']; ?></a>-->
				<p class="category1 aa"><?php echo $row['title']; ?></p>
				</div>

				</div>
			<?php
		}
	}

	?>

					<form method="POST" action="Category.php" id="myForm">
								<input type="hidden"  name="idcat" id="idcat" value="" >
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
