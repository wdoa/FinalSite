<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include 'login.php' ?>
	<div class="fon-test">
	</div>
	<!--<div class="container clearfix">-->
		<div class="main">
			<?php include 'test.php' ?>
		<div class="content">
			
			
		</div>
<div class="content-table">
<span id="err" class="err"></span>
<form  action="" id="add_err">
			
				<input type="text" value="" class="login" name="login" placeholder="login"/>
				<br>
				<input type="password" value="" class="password" name="password" placeholder="password"/>
				<br>
				<input type="text" value="" class="fname" name="fname" placeholder="First name"/>
				<br>
				<input type="text" value="" class="lname" name="lname" placeholder="Last name"/>
				<br>
				<input type="hidden" value="2" class="au" name="au" />
				<br>
				<input type="submit" class='reg myButton' value="create account"/>
			</form>
			<br>
			<br>
</div>
	</div>
	<footer>
	</footer>
	</body>
	<script src="images.js"></script>
	<script src="regis.js"></script>
	<script src="log.js"></script>
</html>
