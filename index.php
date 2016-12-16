<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	</head>
	<body>
	
	<?php include 'login.php' ?>
	<?php session_start();
	?>
	<div class="fon-test">
	</div>
	<!--<div class="container clearfix">-->
		<div class="main">
			<?php include 'test.php' ?>
		<div class="content">
			<img  class="prev bu arr" src="web/assets/img/larrow.png" />
			<img  class="next bu arr" src="web/assets/img/rarrow.png" />
			<div class="c-slider">
				<div class="image" style="display: inline-block">
					<img  class="pic" src="web/assets/img/4.jpeg" />
				</div>
				<div class="image">
					<img  class="pic" src="web/assets/img/5.jpeg" />
				</div>
				<div class="image">
					<img class="pic" src="web/assets/img/1.jpeg" />
				</div>
				<div class="image">
					<img class="pic" src="web/assets/img/2.jpeg" />
				</div>
				<div class="image">
					<img class="pic" src="web/assets/img/3.jpeg" />
				</div>
			</div>
			
			<!--<button class="prev myButton bu"><</button>
			<button class="next myButton bu">></button>-->
			<div class="radiobut">
			 <label class="radio "> 
				<input class="rad " type="radio" name="p" checked="true" />
				<span></span>
			</label>
			<label class="radio "> 
				<input class="rad " type="radio" name="p"   />
				<span></span>
			</label>
			<label class="radio "> 
				<input class="rad " type="radio" name="p"  />
				<span></span>
			</label>
			<label class="radio "> 
				<input class="rad " type="radio" name="p"  />
				<span></span>
			</label>
			<label class="radio "> 
				<input class="rad " type="radio" name="p"  />
				<span></span>
			</label>
			</div>
		</div>
<div class="content-table">
<div class="video">
	<iframe width="96%" height="480" src="https://www.youtube.com/embed/iKIw_6BuW1Q" frameborder="0" allowfullscreen></iframe>
</div>

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