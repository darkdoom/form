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
  <p>
  <?php 
include "conexion.php";
$matricula=$_POST['hmatricula_usuario'];
$tipo=$_POST['tipo_usuario'];
$documento=$_POST['hdocumento_usuario'];
$nombre=$_POST['hnombre_usuario'];
$apellido=$_POST['hapellido_usuario'];
$email=$_POST['hmail_usuario'];
$celular=$_POST['hcelular_usuario'];
$cod_carrera=$_POST['cod_carrera'];
$sql ="INSERT INTO incripcion VALUES ('$cod_carrera','$matricula')"; 
$result = mysqli_query ($conexion,$sql);
$sql ="INSERT INTO estudiante VALUES ('$matricula','$tipo','$documento','$nombre','$apellido','$email','$celular')";
$result = mysqli_query ($conexion,$sql);
//$result2 = mysql_query ($sql2);


// verificamos que no haya error
if (!$result){
echo "La consulta SQL contiene errores.".mysql_error();
exit();
}
else {
echo "<h1>REGISTRO GUARDADO CORRECTAMENTE</h1>";
echo "<h2>Elija la opcion deseada: </h2>";
include "desconectar.php"; 
}
?>
<br><a href=../php/nuevo_usuario.php></p><button>CREAR USUARIO</button></a><br>
<br><a href=../index.html><button>CONSULTAR OTRO USUARIO</button></a>
