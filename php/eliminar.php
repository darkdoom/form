<!DOCTYPE HTML>
<html>
<head>
<title>ASISTENCIA</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
</head>
<body>
    <div id="header">
      <div id="logo" onclick="location.href='http://apoyoterapeutico.co/formulario';" style="cursor: pointer"></div>
    </div>
    <div id="site_content">
  <?php 
include "conexion.php"; 
$sql = "select * FROM estudiante WHERE matricula_estudiante='".$_POST['hmatricula']."'";
$result = mysql_query ($sql);
// verificamos que no haya error
if (! $result){
echo "La consulta SQL contiene errores.".mysql_error();
exit();
}else {
$num_results = mysql_num_rows($result); 
if($num_results > 0)
{
	$sql = "delete FROM estudiante WHERE matricula_estudiante='".$_POST['hmatricula']."'";
$result = mysql_query ($sql);
echo "Se ha dado de baja el usuario con cédula ";
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
