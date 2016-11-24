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
// get the q parameter from URL
$c = $_GET["c"];
$c=strtoupper($c);

   // echo "Se agregó el ingrediente al platillo";
$consulta = "SELECT * FROM alumno WHERE nombre='$c'";
$result = $conn->query($consulta);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<table class='w3-table w3-striped w3-border'>
		<thead>
		<tr class='w3-red'>		
		<th>Matricula del alumno</th>
		<th>Nombre del alumno</th>
		<th>Apellido</th>
		<th>Sexo</th>
		<th>Telefono</th>
		<th>Edad</th>
			<th colspan=2>Acciones a realizar</th>
		</tr></thead>";
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['matricula'] . "</td>";
		echo "<td>" . $row['nombre'] . "</td>";
		echo "<td>" . $row['apellido'] . "</td>";
		echo "<td>" . $row['sexo'] . "</td>";
		echo "<td>" . $row['telefono'] . "</td>";
		echo "<td>" . $row['edad'] . "</td>";
		

echo  "<td><a href='javascript:borraIngrediente(".$row['id_alumno'].")'>Quitar</a></td>";
		}
	echo "</table>";
	
		
	}
	else {
    	echo "No hay resultados";
}

$conn->close();


?>
</body>
</html>