<?php  

$conexion = mysqli_connect("localhost", "root", "", "FullStack");
if(!$conexion){
	echo "Error al conectar a la base de datos";
	print("<br>");
}
else{
	echo "Conectado a la base de datos";
	print("<br>");
}


?>