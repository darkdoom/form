<?php 
$db_host="localhost"; 
$db_usuario="root"; 
$db_password=""; 
$db_nombre="asistencia"; 
$conexion = mysqli_connect($db_host, $db_usuario, $db_passworxd, $db_nombre); 
if(mysqli_connect_errno($conexion))
{
	echo "fallo la conexion con MYSQL: ".mysqli_connect_error();
}
?> 
