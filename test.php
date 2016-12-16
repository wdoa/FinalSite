			<div class="title">
				<img class="titleIm" src="web/assets/img/t.png"/>
				<div class="titleT">
				Boring
				</div>
			</div>
			<div class="menu">
				<div class="nav">
					<ul >
						<li>
							<a href="index.php"><h4>Home</h4></a>
						</li>
						<li>
							<a href="News.php"><h4>News</h4></a>
							<ul>
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
										<!--	<li><a href=""><?php echo $row['title']; ?></a></li>-->
										<li  class="category aa"><?php echo $row['title']; ?></li>

											<?php
										}
									}

	?>
							<form method="POST" action="Category.php" id="myForm">
									<input type="hidden"  name="idcat" id="idcat" value="" >
							</form>
							</ul>
						</li>
						<li>
							<a href="Contacts.php"><h4>Contacts</h4></a>
						</li>
<?php if (isset($_SESSION['login']) &($_SESSION['au']==1)){ ?>
						<li>
							<a href="p1.php"><h4>Users</h4></a>
						</li>
						<li>
							<a href="p2.php"><h4>Categories</h4></a>
						</li>
						<li>
							<a href="p3.php"><h4>News</h4></a>
						</li>
						<?php }  ?> 

						<li>
							<?php if (isset($_SESSION['login'])){ ?><?php echo 'Hello '.$_SESSION['login'];?>
							<a href="logout.php"><h4>Logout<?php ?></h4>
							</a>
						<?php } else{ ?> 
							<a href="javascript: void(0);" id="myLog"><h4>Login</h4></a>
							<?php } ?>
						</li>
						
					</ul>
				</div>
			</div>

