<?php 
define('DB_USER', "anniebot"); //логин админа БД 
define('DB_PASSWORD', "123456"); // пароль админа БД 
define('DB_DATABASE', "anniebot"); // база данных 
define('DB_SERVER', "localhost"); // сервер 'localhost' 
?>
<?php 

class DB_CONNECT { 

function __construct() { 
$this->connect(); 
} 

function __destruct() { 
$this->close(); 
} 

function connect() { 
//require 'db_config.php'; 

$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error()); 

$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error()); 

return $con; 
} 

function close() { 
mysql_close(); 
} 

} 

?>