<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/style_login.css">
	
</head>
<body>
<header class="container">
		<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                </div>
            </nav>
        </div> <br><br>

		<div class="cuadrado">
			
		</div>

		<div class="row">
			<div id = "p1" class="col-sm-12 my-4">
				<h1 id = "titulo_1" class="titulo_1 display-3 text-uppercase font-weight-bold text-right mt-5">Inicia Sesión</h1>
			</div>
			<div class="col-sm-6">
				<ul>
					<li class="lista text-uppercase font-weight-bold text-left mt-4">Arquitectura y Soluciones</li>
					<li class="lista display-5 text-uppercase font-weight-bold text-left mt-1">Ciencia de Datos</li>
					<li class="lista display-5 text-uppercase font-weight-bold text-left mt-1">Integración de Tecnologías</li>
					<li class="lista display-5 text-uppercase font-weight-bold text-left mt-1">Valor de la Información</li>
					<li class="lista display-5 text-uppercase font-weight-bold text-left mt-1">Visualización</li>
				</ul>
				
			</div>
			<div class="col-sm-6 text-center">
				<p class="p2">Ingresa tu usuario y contraseña</p>
				
				<form action="validarLogin.php" method="POST">
					 
						<!-- if(isset($_GET['error']) && $_GET['error']==true){
						print("<h4>Error: Nombre de usuario o contraseña invalidos</h4>");
						}  -->
					
					<input type="text" class="ingreso_datos form-control rounded-0 my-4 text-left" name="usuario" placeholder="Nombre de Usuario">

					<input type="password" class="ingreso_datos form-control rounded-0 my-4 text-left" name="password" placeholder="Contraseña">
					
					<!-- Boton de Ingreso -->
					 <input type="submit" value="Ingresar" class="btn-ingresar font-weight-bold rounded"><br><br> 
				</form>

				<button class="btn rounded">
						<a class="btn_registrate text-uppercase font-weight-bold" href="registro.php"> Registrate </a>
				</button>

				<ul class="list-unstyled list-inline my-4">	<!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
					<li class="list-inline-item"> <a href=""> <!-- El href se puede llenar con la página que se desee -->
							<i class="fcbk fab fa-facebook-f"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
					<li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=3126386300&text=%C2%BFEn%20que%20puedo%20ayudarte"> <!-- El href se puede llenar con la página que se desee -->
							<i class="wht fab fa-whatsapp"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
					<li class="list-inline-item"> <a href=""> <!-- El href se puede llenar con la página que se desee -->
							<i class="fab fa-instagram"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
				</ul>
			</div>
		</div>
	
	</header><!-- /header -->
</body>
</html>