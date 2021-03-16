
//--- Se extrae el Formulario --- //

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input'); // se tiene arreglo de los inputs 

// --- Objeto con Expresiones regulares --- //

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{5,16}$/, // Letras, numeros, guion y guion_bajo
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{5,12}$/, // 4 a 12 digitos.
}

const campos = {
    usuario: false,
    correo: false,
    password: false
}

// --- Función para validación de campo ---//

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto')
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto')
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle')
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle')
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo')
        campos[campo] = true;
    }
    else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto')
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto')
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle')
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle')
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo')
        campos[campo] = false;
    }
}

// --- Función para confirmación de contraseña --- //

const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if (inputPassword1.value !== inputPassword2.value){
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto')
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto')
        document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle')
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle')
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo')
        campos['password'] = false;
    }
    else{
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto')
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto')
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle')
        document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle')
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo')
        campos['password'] = true;
    }
}

const validarFormulario = (e) => {
    switch (e.target.name){
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
        break;
        
        case "password":
            validarCampo(expresiones.password, e.target, 'password')
            validarPassword2()
        break;
        
        case "password2":
            validarPassword2()
        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
})

// --- Se agrega evento para el boton --- //

const phpComunicacion = () =>{
    $.ajax({
        //la url en la que esté tu php
        url  :"../php/validar.php",
        async :true,
        //(aquí GET o POST)
        method :  "POST",
        data : {
            "usuario": campos.usuario,
            "password" : campos.password,
            }
        }).done(function(response){
            //Aquí te devuelve el OK o KO dependiendo de lo que hagas en PHP
            //En php recibes en este caso concreto $_POST['nombreUsuario'] y $_POST['pass']
        });
}

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.correo  && campos.password && terminos.checked ){
		//phpComunicacion();
        formulario.reset();
        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 3000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		}
        
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});