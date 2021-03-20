<?php

// Se realiza la conexión con la base de datos
include ('conexion.php');
if(!$conexion){
	echo "Error al conectar a la base de datos";
	print("<br>");
}
else{
	echo "Conectado a la base de datos";
	print("<br>");
}
//Recibir los datos y almacenarlos en variables
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$password = $_POST["password"];
//$password = password_hash($_POST["password"], PASSWORD_DEFAULT); //encripta la clave del usuario

//Consulta para insertar 
$insertar = "INSERT INTO `ID_Loging`( `usuario`, `correo`, `password`) VALUES ('$usuario', '$correo', '$password')"; 

//Se verifica que no se repita un nombre de ususario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM ID_Loging WHERE usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
			alert("El usuario ya está registrado");
			window.history.go(-1);
		 </script>';
	exit;	//termina la consulta
}

//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo 'Error al registrarse';
} else{
	echo '<script>
			alert("Se ha registrado exitosamente");
		 </script>';
	header("Location: login.php");	 
}
//Cerrar Conexion
mysqli_close($conexion);



 ?>