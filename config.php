<?php



define('DB_NAME','webas');
define('DB_USERNAME','topkekas');
define('DB_PASSWORD','topkekaspass');

define('DB_SERVER','10.0.0.222');

define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
	die("ERROR: Could not connect. " .mysqli_connect_error());
}
?>
