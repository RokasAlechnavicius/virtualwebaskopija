<?php



define('DB_NAME','wordpress');
define('DB_USERNAME','wordpressuser');
define('DB_PASSWORD','topkekas');

define('DB_SERVER','10.0.0.222');

define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
	die("ERROR: Could not connect. " .mysqli_connect_error());
}
?>
