<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<table class="w3-table w3-striped w3-border">
<thead>
<tr class="w3-red">
  <th>Matricula</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>sexo</th>
  <th>edad</th>
  <th>telefono</th>
 
</thead>

<?PHP
/*echo "<form id=frmbusca name=frmbusca method=post action=Consulta_Usuario.php>
    <p>
      <label>Escriba el nombre del usuario</label>
      <input name=txtusuario type=text />
      
    </p> </form>";

if(isset($_POST["txtusuario"])){
	$Criterio=$_POST["txtusuario"];*/

$sql = "SELECT * FROM ingrediente";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tr>";
	echo "<td>" . $row['matricula'] . "</td>";
	echo "<td>" . $row['nombre'] . "</td>";
	echo "<td>" . $row['apellido'] . "</td>";
	echo "<td>" . $row['sexo'] . "</td>";
	echo "<td>" . $row['edad'] . "</td>";
	echo "<td>" . $row['telefono'] . "</td>";

	}
}
else {
    echo "0 results";
}
$conn->close();
?>
</table>

</body>
</html>