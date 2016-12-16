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
<div class="fon-test">
	</div>
		<div class="main">
			<?php include 'test.php' ?>
		
			<?php include 'modalP1.php' ?>

<div class="content-table">
	<table>
    <thead>
        <tr><th colspan="7">Users</th></tr>
        <tr>
        <th >user_id</th>
        <th >login</th>
        <th >first_name</th>
        <th >last_name</th>
        <th >group_au</th>
        <th >date_creation</th>
        <th >action</th>
        </tr>
    </THead>
    <TBody>
<?php
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
			?>
			<tr >
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['login']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['group_au']; ?></td>
			<td><?php echo $row['date_creation']; ?></td>
			<td><a href="javascript: void(0);"><img class="help1 correct" src="https://openclipart.org/image/2400px/svg_to_png/231633/Colorful-Circle-Fractal.png" width=20 height=20/></a>   
			<a href="javascript: void(0);"><img class="del"  src="web/assets/img/x.jpg" width=20 height=20/></a></td>       
			</tr>
			<?php
		}
	}

	?>
	</tbody>
	</Table>
	<button class="myButton bu" id="myBtn">Add</button>
</div>
</div>

<?php include 'modalP1R.php' ?>

<footer>
	</footer>

	</body>
	<?php if (isset($_SESSION['login'])){ ?>

						<?php } else{ ?> 
							<a href="javascript: void(0);" id="myLog"><h4>Login</h4></a>
							<?php } ?>
		<script src="images.js"></script>
		<script src="admin.js"></script>
		<script src="help.js"></script>
</div>