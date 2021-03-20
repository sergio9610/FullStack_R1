//console.log('funcionando');
//--- Se extrae el Formulario --- //

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input'); // se tiene arreglo de los inputs 

let usuario = document.getElementById('usuario');
let correo = document.getElementById('correo');
let password = document.getElementById('password');

// ------ Función de conexion con Php ----- //
function data(){
    let datos = new FormData();
    datos.append("usuario", usuario.value);
    datos.append("password", password.value);
    fetch('../php/newvalidacion.php',{
        method: 'POST',
        body: datos
     }).then(Response, Response.json())
    .then(datoss =>{
        console.log(datoss)
    });    
}

// --- Objeto con Expresiones regulares --- //

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
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

// formulario.addEventListener('submit', (e) => {
//     e.preventDefault();
//     //data();
//     // console.log('diste un click');

//     var datos = new FormData(formulario);

//     const terminos = document.getElementById('terminos');
//     if(campos.usuario && campos.correo  && campos.password && terminos.checked ){
//         formulario.reset();
//         document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');

//         document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
//         setTimeout(() => {
//             document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
//         }, 2000);

//         document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
//             icono.classList.remove('formulario__grupo-correcto');
//         });
//     } else {
//         document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
//     }

//     // console.log(datos)
//     // console.log(datos.get('usuario'))
//     // console.log(datos.get('correo'))
//     // console.log(datos.get('password'))

//     fetch('../php/validar.php',{
//         method: 'POST',
//         body: datos
//     })
//         .then(res => res.json())
//         // .then(data => {
//         //     console.log(data)
//         // })
// }); 