<?php 
// $conexion = mysqli_connect("localhost", "root", "", "FullStack");
// session_start();
// if (!isset($_SESSION['id_ususario'])){
//  	header("Location: validarLogin.php");
//  }
// $iduser = $_SESSION['id_ususario'];

// $sql = "SELECT id, usuario FROM ID_Loging WHERE id=''$iduser";
// $resultado =mysqli_query($conexion, $sql);
// $fila = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<link rel="stylesheet" href="">
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Css Style -->    
    <link rel="stylesheet" href="../css/styel_home.css">
</head>
<body>
	<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </nav>
        </div> <br>
	<div>
		<h1 class="mensajeBienvenida display-3 text-uppercase font-weight-bold">Bienvenido a Cunati</h1>
	</div>
	<!-- Logo -->
	<div>
		<img src="../img/logo.png" alt="Logo" class="logo"></a>
	</div>
</body>
</html>