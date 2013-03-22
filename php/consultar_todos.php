<!DOCTYPE HTML>
<html>
<head>
<title>ASISTENCIA</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<body>
    <div id="header">
      <div id="logo" onclick="location.href='http://apoyoterapeutico.co/formulario';" style="cursor: pointer"></div>
    </div>
    <div id="site_content">
  <?php 
include "conexion.php"; 
$sql="SELECT * FROM estudiante";
$result=mysqli_query($conexion,$sql);
if (! $result){
echo "La consulta SQL contiene errores.".mysql_error();
exit();
}else {
$num_results = mysqli_num_rows($result); 
if($num_results > 0)
{
echo"<h1> INFORMACION DEL ESTUDIANTE:</h1></br>
<table border='1'><tr><td>Matricula</td><td>Tipo</td><td>Documento</td><td>Nombres</td><td>Apellidos</td><td>Celular</td><td>Email</td><td>Eliminar</td>
</tr><tr>";
//obtenemos los datos resultado de la consulta
while ($row = mysqli_fetch_array($result)){
echo "<tr><td>".$row['matricula_estudiante']."</td><td>".$row['tipo_documento']."</td><td>".$row['cedula_estudiante']."</td><td>".$row['nombres_estudiante']."</td><td>".$row['apellidos_estudiante']."</td><td>".$row['celular_estudiante']."</td><td>".$row['email_estudiante']."</td><td><a href='../php/eliminarUsuario.php?
matricula_estudiante=".$row['matricula_estudiante']."'>Eliminar</a></td></tr>";
}
echo "</tr></table>";
}else {

?>
<script language="javascript" type="text/javascript">
alert("No existe el estudiante");
</script>
<h3>NO SE ENCONTRO EL ESTUDIANTE POR FAVOR PULSE CLICK EN EL BOTON DESEADO:</h3><br><br>
<?
}
}
include "desconectar.php"; 
?>
<br><a href="nuevo_usuario.php"><button>CREAR USUARIO</button><br>
<br><a href="../index.html"><button>CONSULTAR OTRO USUARIO</button>
</a>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      UNIVERSIDAD INCCA DE COLOMBIA</div>
 
</body>
</html>
