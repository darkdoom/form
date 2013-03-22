<!DOCTYPE HTML>
<html>
<head>
<title>ASISTENCIA</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
</head>
<body>
    <div id="header">
      <div id="logo"></div>
    </div>
    <div id="site_content">
  <?php 
include "conexion.php"; 
$sql = "SELECT matricula_estudiante,cedula_estudiante,nombres_estudiante,apellidos_estudiante,celular_estudiante,email_estudiante FROM estudiante WHERE matricula_estudiante='".$_POST['hmatricula']."'";
$result = mysql_query ($sql);
// verificamos que no haya error
if (! $result){
echo "La consulta SQL contiene errores.".mysql_error();
exit();
}else {
$num_results = mysql_num_rows($result); 
if($num_results > 0)
{
echo"<h1> INFORMACION DEL ESTUDIANTE:</h1></br>
<table border='1'><tr><td>Matricula</td><td>Documento</td><td>Nombres</td><td>Apellidos</td><td>Celular</td><td>Email</td>
</tr><tr>";
//obtenemos los datos resultado de la consulta
while ($row = mysql_fetch_row($result)){
echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>";
}
echo "</tr></table>";
}
else{


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
<br><a href="../php/nuevo_usuario.php"><button>CREAR USUARIO</button><br>
<br><a href="../index.html"><button>CONSULTAR OTRO USUARIO</button>
</a>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      UNIVERSIDAD LA GRAN COLOMBIA -PROGRAMA DE DERECHO 2013</div>
 
</body>
</html>
