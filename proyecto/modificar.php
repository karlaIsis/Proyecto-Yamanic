<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT matricula, nombre, apellido, sexo,telefono, edad FROM alumno WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Alumnos</title>
	</head>
	<body>
		
		<center><h1>Modificar Alumno</h1></center>
		
		<form name="modificar_alumno" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="matricula" value="<?php echo $matricula; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Apellido</b></td>
					<td><input type="text" name="apellido" size="25" value="<?php echo $row['apellido']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Sexo</b></td>
					<td><input type="text" name="sexo" size="25" value="<?php echo $row['sexo']; ?>" /></td>
				</tr>
				
				<tr>
					<td><b>Edad</b></td>
					<td><input type="text" name="edad" size="25" value="<?php echo $row['edad']; ?>" /></td>
				</tr>

                <tr>
					<td><b>Telefono</b></td>
					<td><input type="text" name="telefono" size="25" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
