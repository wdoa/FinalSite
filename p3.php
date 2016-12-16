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
			<?php include 'modalP3.php' ?>
			
	<div class="content-table">
	<table>
    <thead>
        <tr><th colspan="7">News</th></tr>
        <tr>
        <th >id</th>
        <th >title</th>
        <th >id_category</th>
        <th >content</th>
        <th >url_img</th>
        <th >action</th>
        <th ></th>
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
	
	$sql="SELECT * FROM news ";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			?>
			<tr><td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['id_category']; ?></td>
			<td><?php echo  "you don't want to see this"?></td>
			<td><?php echo $row['url_image'];/*$row['url_image'];*/ ?></td>
			<td><a href="javascript: void(0);"><img class="help1 correct" src="https://openclipart.org/image/2400px/svg_to_png/231633/Colorful-Circle-Fractal.png" width=20 height=20/></a> 
			<a href="javascript: void(0);"><img class="del"  src="web/assets/img/x.jpg" width=20 height=20/></a></td>       
			</tr>
			<?php
		}
	}

	?>
    </TBody>
    </table>
       <button class="myButton bu" id="myBtn">Add</button>
       </div>
    </div>
    <?php include 'modalP3R.php' ?>

    <footer>
	</footer>
    <script src="images.js"></script> 
    <script src="admin.js"></script>
    <script src="help3.js"></script>
</div>