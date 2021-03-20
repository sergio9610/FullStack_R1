<?php

//Conexion a la base de datos
// $conexion = mysqli_connect("localhost", "root", "", "FullStack");
include('conexion.php');

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$consulta = "SELECT * FROM ID_Loging WHERE usuario ='$usuario' and password='$password'";

//Ejecución de la consulta
$resultado =mysqli_query($conexion, $consulta);

//Si al momento de ejecutar la consulta, a coincidido, dará un resultado, y entrgará un 1 ó 0
$filas = mysqli_num_rows($resultado);  
//$mensaje = '';
if($filas > 0){
	$_SESSION['id_ususario'] = $filas["id"];
	header("location:home.php");
}

else{
	?>
	<?php
	include("login.php")
	?>
	<p class="loginError fas fa-exclamation-triangle">Error en la autentificación</p>
	<?php
}

//Se libera el resultado y se cierra la conexion
mysqli_free_result($resultado);
mysqli_close($conexion);

// function conexionSQL(){
// 	$server = 'localhost';
// 	$username = 'root';
// 	$password = '';
// 	$database = 'FullStack';

// 	$link = new mysqli($server,$username,$password,$database);
// 	if($link->connect_error) {
// 		$error = "Error de conexion: ".$link->connect_errno
// 				."Mensaje: ".$link->connect_error;
// 		die($error);
// 	}else{
// 		$q = "SET CHARACTER SET UTF8";
// 		$link->query($q);
// 		return $link;
// 	}
// }