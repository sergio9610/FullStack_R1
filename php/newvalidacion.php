<?php 

include('conexion.php');

if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
	$usuario = $_POST['usuario'];

	$query = "SELECT * FROM ID_Loging WHERE usuario = '$usuario";
	$result = mysqli_query($conexion,$query);

	if(mysqli_num_rows($result)>0){
		echo json_encode(array('success' =>1));
	}else{
		echo json_encode(array('success'=>0));
	}
}

 ?>