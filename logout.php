<?php
session_start();
unset($_SESSION['login']);
					header("Location: index.php");
					session_destroy();
		
header("Location: index.php");
	?>
