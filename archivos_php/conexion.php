<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWD', '');
define('DB_NAME', 'dbprueba');

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME) or die('No se pudo conectarse con la Base de Datos');
mysqli_set_charset($conexion, "utf8");
?>
