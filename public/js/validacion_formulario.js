var nombre = document.getElementById('nombre');
var email = document.getElementById('email');
var mensaje = document.getElementById('mensaje');
var error= document.getElementById('error');

error.style.color= 'rgba(255,255,255,.75)';

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validarFormulario() {
   console.log('Enviando Formulario...');

   
    var mensajesError =[];
    var err = false;
    if(nombre.value ==null || nombre.value===''){
        mensajesError.push('Ingresa tu nombre');
        err = true;
    }

if(email.value ==null || email.value===''){
        mensajesError.push('Ingresa tu Email');
        err = true;
    }   
    // if(email.value ==null || email.value==='' || !validateEmail(email.value)){
    //     mensajesError.push('Ingresa tu Email');
    //     err = true;
    // }   
    if(!validateEmail(email.value)){
        mensajesError.push('Ingresa un Email valido');
        err = true;
    }   
    if(mensaje.value ==null || mensaje.value===''){
        mensajesError.push('Ingresa tu Mensaje');
        err = true;
    }

    error.innerHTML = mensajesError.join(',');

    
   return !err;

}
  