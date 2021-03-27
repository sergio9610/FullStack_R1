<?php

//Conexion a la base de datos
// $conexion = mysqli_connect("localhost", "root", "", "FullStack");
session_start();

  require 'database.php';
  echo "usuario:".$_POST['usuario'];
  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $conn = conexionSQL();
    $q = "SELECT * FROM ID_Loging WHERE usuario = '".$_POST['usuario']."'";
    $var = $conn->query($q);
    $results = $var->fetch_assoc();
    
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      header("Location: home.php");
    }
	else{
	?>
	<?php
	include("login.php")
	?>
	<p class="loginError fas fa-exclamation-triangle">Error en la autentificación</p><br>
	<?php
	}

}

//Se libera el resultado y se cierra la conexion
mysqli_free_result($var);
mysqli_close($conn);
