<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id20825741_akaridesing');
define('DB_PASSWORD', 'L1lumaya_');
define('DB_NAME', 'id20825741_akaridesing');
 
/* Attempt to connect to MySQL database */
$conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conexion === false){
    die("No se pudo conectar. " . mysqli_connect_error());
}

?>