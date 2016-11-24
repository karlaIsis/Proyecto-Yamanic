
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
	
	
$nombreT = $_GET["txtNombreT"];


   // echo "Se agregó el ingrediente al platillo";
$consulta = "SELECT * FROM vestuarios WHERE nombre='$nombreT'";
$result = $conn->query($consulta);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<table class='w3-table w3-striped w3-border'>
		<head>
		<tr class='w3-red'>		
		<th>Clave</th>
		<th>Nombre del traje</th>
		<th>Genero</th>
		<th>Descripcion</th>
		<th>Piezas</th>
	
		</tr></head>";
	}
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['clave'] . "</td>";
		echo "<td>" . $row['nombre'] . "</td>";
		echo "<td>" . $row['genero'] . "</td>";
		echo "<td>" . $row['descripcion'] . "</td>";
		echo "<td>" . $row['piezas'] . "</td>";
		echo "</tr>";
		}
?>
	</body>
</html>