<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro</title>
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->    
    <link rel="stylesheet" href="../css/style_registro.css	">

</head>

<body>
	<header class="container">
		<!-- Logo -->
		<div class="logo__container container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo.png" alt="Logo" class="logo"></a>
            </nav>
        </div> <br><br>
		
		<!-- Título Principal -->
		<div class="principal">
			<div class="cuadro_1">
				<h1 class="titulo_1 display-4 font-weight-bold mt-5">Crea tu Usuario</h1>
			</div>

		<!-- Formulario -->
		<form action="registro.php" method="post" class="formulario" id="formulario">
			
			<!-- Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label formulario__label-nombreUsario">Nombre de Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" id="usuario" class="formulario__input rounded" name="usuario">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- icono -->
				</div>
				<p class="formulario__input-error">El usario debe contener de 4 a 16 dígitos. Solo puede contener números, letras y guion bajo</p>
			</div>		
			<!-- Correo -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label formulario__label-correo">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" id="correo" class="formulario__input rounded" name="correo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- icono -->
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, números, guion y guion bajo</p>
			</div>
					
			<!-- Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label formulario__label-password">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" id="password" class="formulario__input rounded" name="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- icono -->
				</div>
				<p class="formulario__input-error">La contraseña debe ser de 5 a 12 dígitos</p>
			</div>
			
			<!-- Confirmación de Contraseña -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Confirmar Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" id="password2" class="formulario__input rounded" name="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- icono -->
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales</p>
			</div>

			<!-- Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label for="" class="formulario__label">
					<input type="checkbox" class="formulario__checkbox" name="terminos" id="terminos">
					Acepto Terminos y Condiciones
				</label>
			</div>

			<!-- Mensaje de Warning -->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor complete el formulario correctamente</p>
			</div>

			<!-- Boton -->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn btn rounded">Crear usuario</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
			</div>
						
					
		</form>
	</header>

	<!-- Scripts -->
	<script src="../Js/validacion_registro.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>