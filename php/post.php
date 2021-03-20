<?php 
include 'conexion.php';

$usuario = $_POST['usuario'];
$correo = $_POST["correo"];
$password = $_POST['password'];

if($usuario === '' || $correo === '' || $password === ''){
	echo json_encode('Llena todos los campos');
}
else{
	echo json_encode('Correcto: <br>Usuario:'.$usuario.'<br>Correo:'.$correo.'<br>Password:'.$password);
}


 ?>