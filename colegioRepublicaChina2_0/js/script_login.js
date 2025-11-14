//index para el menu desplegable

// const navDesplegable = document.querySelector(".nav_desplegable")
// const navMenu = document.querySelector(".nav-menu")

// navDesplegable.addEventListener("click", ()=> {
//     navMenu.classList.toggle("nav-menu_visible")
// })

//Ejecutar funciones
    // bobada mia     document.getElementById("nombreUsuario_iC").innerHTML = "Señor@" $usuario 


document.getElementById("btn_login").addEventListener("click", iniciarSesion)
document.getElementById("btn_register").addEventListener("click", register)
window.addEventListener("resize", anchoPagina)


//Variables
var contenedor_login_register = document.querySelector(".contenedor_login-register")
var formulario_login = document.querySelector(".formulario_login")
var formulario_register = document.querySelector(".formulario_register")
var caja_trasera_login = document.querySelector(".caja_trasera_login")
var caja_trasera_register = document.querySelector(".caja_trasera_register")


//Funciones
function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display= "block";
        caja_trasera_register.style.display= "block";
    } else{
            caja_trasera_register.style.display = "block";
            caja_trasera_register.style.opacity = "1"
            caja_trasera_login.style.display = "none"
            formulario_login.style.display = "block"
            formulario_register.style.display = "none"
            contenedor_login_register.style.left = "0"
    }
}

anchoPagina();

function iniciarSesion (){

    if (window.innerWidth > 850){
        formulario_register.style.display = "none"; //ASDNJASD don working but idk i hate me
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else{
            formulario_register.style.display = "none";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "block";
            caja_trasera_register.style.display = "block";
            caja_trasera_login.style.display = "none";
    }
}

function register (){

    if (window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.display = "none";
            caja_trasera_login.style.display = "block"
            caja_trasera_login.style.opacity = "1";

    }
    
}


// Para el scroll del index

/*window.onscroll = function(){

    scroll = document.documentElement.scrollTop;

    header_I = document.getElementById("header_I");
    
    if (scroll > 20){
        header.classList.add('nav_mod')
    }
}*/

