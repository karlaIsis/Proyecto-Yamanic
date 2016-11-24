<?php require("conectar.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?PHP
$matricula = $_POST["txtMatricula"];
$nombre = $_POST["txtNombre"];
$nombre=strtoupper($nombre);
$apellido = $_POST["txtApellido"];
$sexo = $_POST["selSexo"];
$sexo=strtoupper($sexo);
$telefono = $_POST["txtTelefono"];
$edad = $_POST["txtEdad"];



$sql = "INSERT INTO alumno (matricula,nombre, apellido, sexo, telefono, edad)
VALUES ($matricula, '$nombre', '$apellido', '$sexo', $telefono, $edad)";

if ($conn->query($sql) === TRUE) {
    echo "Se agregó alumno";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php?r=1');
?>

</body>
</html>