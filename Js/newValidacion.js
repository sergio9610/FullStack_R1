function validar(){
	var usuario, correo, password, password2, terminos, expresion;

	usuario = document.getElementById("usuario").value;
	correo = document.getElementById("correo").value;
	password = document.getElementById("password").value;
	password2 = document.getElementById("password2").value;
	terminos = document.getElementById("terminos").checked;

	expresion = /\w+@\w+\.+[a-z]/;

	if(usuario === "" || correo === "" || password === "" || password2 === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(!terminos){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(usuario.length<5){
		alert("El Usuario es muy corto. El usario debe contener de 5 a 16 caracteres");
		return false;
	}
	else if(usuario.length>16){
		alert("El Usuario es muy largo. Solo se aceptan de 5 a 16 caracteres");
		return false;
	}
	else if(correo.length>30){
		alert("El Correo es muy largo. Solo se aceptan 30 caracteres");
		return false;
	}

	else if(!expresion.test(correo)){
		alert("El correo no es válido");
		return false;
	}
	else if(password.length<8){
		alert("La Contraseña es muy corta. Debe tener mínimo 8 caracteres");
		return false;
	}
	else if(password.length>20){
		alert("La Contraseña es muy larga. Se aceptan 20 caracteres");
		return false;
	}
	else if(password2.length>20){
		alert("La Confirmación de la Contraseña es muy larga. Solo se aceptan 20 caracteres");
		return false;
	}

	else if(password !== password2){
		alert("La confirmación de la contraseña no coincide con la contraseña escrita");
		return false;
	}

} 