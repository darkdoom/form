  <?php 
include "conexion.php";
$matricula=$_GET['matricula_estudiante'];

$consul="DELETE FROM estudiante WHERE matricula_estudiante='".$matricula."'";
$result = mysqli_query ($conexion,$consul);

include "desconectar.php"; 

echo '
<html>
	<head>
		<meta http-equiv="refresh" content="0;url=consultar_todos.php">
	</head>
</html>
';
?>
