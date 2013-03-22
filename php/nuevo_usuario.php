<html>
<head>
<title>ASISTENCIA</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
  <script language="javascript" type="text/javascript" src="../javascrip/valida.js">
  </script>
</head>
<body>
	<div id="main">
    <div id="header">
      <div id="logo" onclick="location.href='http://apoyoterapeutico.co/formulario';" style="cursor: pointer"></div>
    </div>
    <div id="site_content">
	<form action="crearUsuario.php" method="post" onSubmit="return validar();">
	<fieldset>
		<legend>DATOS PERSONALES</legend>		
			<div class="tabla" style="width:800px; height:150px">
			<div class="fila">
        <div class="columna">
	        <label for="lbmatricula">Matricula: </label></div>
		<div class="columna">
			<input type="text" id="hmatricula_usuario" name="hmatricula_usuario" size="8" onBlur="revisarObli(this); revisarLongitud(this, 5, 5);">
		</div>
		<div class="columna">
			<label for="lbtipo_usuario">Tipo documento:</label>
			<select name="tipo_usuario" SIZE=1 onChange="irA(this)">
			<option value='TI'>TI</option>
			<option value='CC'>CC</option>
			</select>
		</div>
		<div class="columna">
			<label for="lbdocumento_usuario">Documento de identidad:&nbsp; </label>
		</div>
		<div class="columna">
			  <input type="text" id="hdocumento_usuario" name="hdocumento_usuario" size="20" onBlur="revisarObli(this); revisarNumerico(this);"><br>
			  </div>
			  </div>
	<div class="fila">
	<div class="columna">
			  <label for="lbnombre_usuario">Nombre:&nbsp;&nbsp; </label>
	</div>
	<div class="columna">
			  <input type="text" id="hnombre_usuario" name="hnombre_usuario" size="50" onBlur="revisarObli(this)">
	</div>
	<div class="columna">
			  <label for="lbapellido_usuario">Apellido: </label>
	</div>
	<div class="columna">
			  <input type="text" id="hapellido_usuario" name="hapellido_usuario" size="50" onBlur="revisarObli(this)"><br>	
	</div>
	</div>
	<div class="fila">
	<div class="columna">
			  <label for="lbemail_usuario">E-mail:&nbsp;&nbsp;&nbsp;&nbsp; </label>
	</div>	
		<div class="columna">
			  <input type="text" id="hmail_usuario" name="hmail_usuario" size="50" onBlur="revisarObli(this); revisarEmail(this)">
		</div>
	<div class="columna">
			  <label for="lbmovil">Celular:&nbsp;&nbsp; </label>	
	</div>
	<div class="columna">
			  <input type="text" id="hcelular_usuario" name="hcelular_usuario" size="10" onBlur="revisarObli(this); revisarNumerico(this); revisarLongitud(this, 10, 10)">
	
	</div>
	</div>	
	</div>
			
			

			
			<!--<label for="lbusuario">Usuario: </label><input type="text" name="husuario" size="50"><br>	
			<label for="lbcontrasena">Contrasena: </label><input type="password" id="contra" name="hcontra">-->	
		</fieldset>
    	
	<fieldset>
		<legend>DATOS CARRERA</legend>		
		<div class="tabla" style="width:800px; height:50px">
		<div class="fila">
		<div class="columna">
        <label for="lbcodigo_carera">Codigo: </label>
        </div>
		<div class="columna">
        <?php
		include "conexion.php";
		$sql="SELECT codigo_carrera, nombre_carrera FROM carrera";
		$campo_text="<input type='text' id='hdescripcion_carrera' name='hdescripcion_carrera' size='50'>";
		$combo="<select name='nombre_carrera' id='nombre_carrera'>";
		$result = mysqli_query ($conexion,$sql);
		// DESPLIEGA 
		while ($row=mysqli_fetch_array($result))
		{
		$combo.="<option value=".$row['nombre_carrera'];
		$combo.=">".$row['nombre_carrera']."</option>";;
		}
		$combo.="</select>";
		include "desconectar.php"; 
		?>
        <?
		echo $combo;
		echo "<label for='lbdescripcion'>Descripcion: </label>";
		echo $campo_text;
		?>
		</div>
		</div>
		</div>
    </fieldset>
    		
	<fieldset>
		<legend>DATOS ASIGNATURAS</legend>	
		<div class="tabla" style="width:800px; height:80px">
		<div class="fila">
  		  <label for="lbcodigo_asignatura">Codigo: </label>
  		  </div>
		  <input type="text" id="hcodigo_asignatura" name="hcodigo_asignatura" size="50">
		  <label for="lbdescripcion_asignatura">Asignatura: </label>
		  <input type="text" id="hdescripcion_asignatura" name="hdescripcion_asignatura" size="50">
		  </div>
    </fieldset>
    	
	<input type="submit" value="Enviar">
	<input type="reset" value="Restaurar">
	</form>
		</div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      UNIVERSIDAD INCCA DE COLOMBIA 2013</div>
  	</div>

</body>
</html>
