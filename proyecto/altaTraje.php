<?php require("conectar.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?PHP
$clave = $_POST["txtClave"];
$nombre = $_POST["txtNombre"];
$nombre=strtoupper($nombre);
$genero = $_POST["selGenero"];
$descripcion = $_POST["txtDescripcion"];
$piezas = $_POST["txtPiezas"];


$sql = "INSERT INTO vestuario (clave,genero, descripcion,nombre, piezas )
VALUES ('$clave', '$genero','$descripcion', '$nombre', $piezas)";


//$sql = "INSERT INTO vestuario (clave,nombre, genero, descripcion,piezas )
//VALUES ('1234r', 'veracruz','masculino', 'botas', 1)";


if ($conn->query($sql) === TRUE) {
    echo "Se agregó el traje" .$sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php?r=2');
?>

</body>
</html>