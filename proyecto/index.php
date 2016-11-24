<?php require("conectar.php"); ?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YAMANIC</title>
<link href="css2/estilo.css" type="text/css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<script src="jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>  
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/iFrameCSS.css">


<body>




<div class="w3-container">


<p>
 <?PHP if(isset($_GET["r"]))
 {
 	if ($_GET["r"]==1)
	{
	echo "<p>Se agregó el alumno</p>";
	}
	if ($_GET["r"]==2)
	{
	echo "<p>Se agregó el traje</p>";
	}
 }
?> 
</p>
</div>


<div id="total">
   	<div id="contenido">
	    	<div id="cabecera">
            <div id="nav">
<ul>
   <li><a href="index.php" class="main">Inicio</a></li>
        <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
  <li><a href="#" onclick="openC('Alumno')">Alumnos </a></li>
  <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
  <li><a href="#" onclick="openC('Trajes')">Trajes</a></li>
  <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
  <li><a href="#" onclick="openC('BuscarAlumno')">Buscar Alumno </a></li>
  <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
  <li><a href="#" onclick="openC('BuscarTraje')">Buscar Traje </a></li>
  <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
  <li><a href="#" onclick="openC('BuscarModificar')">Modificar traje</a></li>
  <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
    <li><a href="#" onclick="openC('ModificarIngrediente')">Modificar alumno</a></li>
</ul>
</div>
<div class="FL"><img src="img/banner1.jpg"/></div>
                <div class="FR"></div>
        </div>







<div id="Alumno" class="w3-container city" id="divAlumno">
<div action="index.html" class="w3-card-4">
<!--<iframe name="frameIngredientes" id="frameIngredientes" src="frmIngredientes.php" class="mi-iframe" frameborder="0">
</iframe>
-->
<div class="w3-container  w3-blue">
  <h2>Registro alumno</h2>
  </div>
  
  <img src="img/yamanic.jpg" alt="yamanic" style="width:30%">
  <p>Captura la información del alumno.</p>
  <form id="frmAlumno" name="frmAlumno" action="altaAlumno.php" method="post" class="w3-container" >
  <label for="txtMatricula" class="w3-label w3-validate">Matricula: </label>
  <input type="text" placeholder="8 digitos." id="txtMatricula" name="txtMatricula" required class="w3-input w3-border">
   <br> <br>   
  <label for="txtNombre" class="w3-label w3-validate">Nombre: </label>
  <input type="text" placeholder="Nombre " id="txtNombre" name="txtNombre" required class="w3-input w3-border">
   <br> <br> 
   <label for="txtApellido" class="w3-label w3-validate">Apellido: </label>
  <input type="text" placeholder="Apellido" id="txtApellido" name="txtApellido" required class="w3-input w3-border">
   <br><br> 
  <label for="selSexo "class="w3-label w3-validate">Sexo: </label>
  <select id="selSexo" name="selSexo" required class="w3-select">
  <option value="Masculino">Masculino</option>
  <option value="Femenino">Femenino</option>
  </select>
   <br><br> 
   <label for="txtTelefono" class="w3-label w3-validate">Telefono: </label>
  <input type="text" placeholder="9 digitos." id="txtTelefono" name="txtTelefono" required class="w3-input w3-border">
   <br> <br>  
   <label for="txtEdad" class="w3-label w3-validate">Edad: </label>
  <input type="text" placeholder="Edad." id="txtEdad" name="txtEdad" required class="w3-input w3-border">
   <br><br> 
	 
   
 
<button class="w3-btn w3-brown">Guardar</button></p>

</form>
</div>

</div>






<div id="Trajes" class="w3-container city">
<div action="altaTraje.php" class="w3-card-4">

  <div class="w3-container  w3-blue">
  <h2>Trajes</h2>
  </div>
  
   
  <p>Captura aquí la información de cada traje.</p>
  <form id="frmTraje" name="frmTraje" action="altaTraje.php" method="post" class="w3-container" >
  <label for="txtClave" class="w3-label w3-validate">Clave: </label>
  <input type="text" placeholder="Clave" id="txtClave" name="txtClave" required class="w3-input w3-border">
   <br><br> 
  <label for="txtNombre" class="w3-label w3-validate">Nombre del traje: </label>
  <input type="text" placeholder="Nombre del traje" id="txtNombre" name="txtNombre" required class="w3-input w3-border">
   <br> <br> 
<label for="selGenero "class="w3-label w3-validate">Genero: </label>
  <select id="selGenero" name="selGenero" required class="w3-select">
  <option value="Masculino">Masculino</option>
  <option value="Femenino">Femenino</option>
  </select>
   <br><br> 
   <label for="txtDescripcion" class="w3-label w3-validate">Descripcion: </label>
  <input type="text" placeholder="Descripcion" id="txtDescripcion" name="txtDescripcion" required class="w3-input w3-border">
   <br><br> 
   <label for="txtPiezas" class="w3-label w3-validate">Piezas: </label>
  <input type="text" placeholder="Piezas" id="txtPiezas" name="txtPiezas" required class="w3-input w3-border">
   <br><br> 
   
   
<button class="w3-btn w3-brown">Guardar</button></p>

</form>
</div>
</div>






<div id="BuscarAlumno" class="w3-container city">
<form action="buscarA.php?nombre=txtNombre" class="w3-card-4">
<h2>Buscar alumno </h2>
<label for="txtNombre" class="w3-label w3-validate">Nombre: </label>
  <input type="text" placeholder="Nombre " id="txtNombre" name="txtNombre" required class="w3-input w3-border">
   <br> <br> 

<button class="w3-btn w3-brown">Buscar</button></p>
</div>
</form>

<div id="BuscarTraje" class="w3-container city">
<form action="buscarT.php?nombre=txtNombreT" class="w3-card-4">
<h2>Buscar traje </h2>
<label for="txtNombreT" class="w3-label w3-validate">Nombre: </label>
  <input type="text" placeholder="Nombre " id="txtNombreT" name="txtNombreT" required class="w3-input w3-border">
   <br> <br> 

<button class="w3-btn w3-brown">Buscar</button></p>
</div>
</form>




<script>
openC("Alumnos")
function openC(cName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(cName).style.display = "block";
}









	
</script>
</body>
</html>
