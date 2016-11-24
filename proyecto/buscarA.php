
<?php require("conectar.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/iFrameCSS.css">

</head>

<body>

<?php
	
	
$nombre = $_GET["txtNombre"];


   // echo "Se agregó el ingrediente al platillo";
$consulta = "SELECT * FROM alumno WHERE nombre='$nombre'";
$result = $conn->query($consulta);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<table class='w3-table w3-striped w3-border'>
		<head>
		<tr class='w3-red'>		
		<th>Matricula del alumno</th>
		<th>Nombre del alumno</th>
		<th>Apellido</th>
		<th>Sexo</th>
		<th>Telefono</th>
		<th>Edad</th>
	
		
		</tr></head>";
	}
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['matricula'] . "</td>";
		echo "<td>" . $row['nombre'] . "</td>";
		echo "<td>" . $row['apellido'] . "</td>";
		echo "<td>" . $row['sexo'] . "</td>";
		echo "<td>" . $row['telefono'] . "</td>";
		echo "<td>" . $row['edad'] . "</td>";
		echo "</tr>";
		}
?>
	</body>
</html>