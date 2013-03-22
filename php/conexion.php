<?php 
$hostname = "asistenciaincca.db.10370262.hostedresource.com";
$username = "asistenciaincca";
$password = "Incca2013#";
$dbname = "asistenciaincca";
$conexion = mysqli_connect($hostname, $username, $password, $dbname); 
if(mysqli_connect_errno($conexion))
{
	echo "fallo la conexion con MYSQL: ".mysqli_connect_error();
}
?> 