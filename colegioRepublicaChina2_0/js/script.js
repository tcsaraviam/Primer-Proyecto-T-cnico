

//Variables

var header = document.querySelector("header");
menu = document.getElementById("header");
body = document.getElementById("contenedor_all")
nav = document.getElementById("nav");


// Para el scroll del index

window.onscroll = function(){

    scroll = document.documentElement.scrollTop;

        //Esto es para que el header oculte a la envoltura0

    header = document.getElementById("header");
    
    if (scroll > 30){
        header.classList.add('nav_mod')
        header.style.top = "0"
        
    }else if(scroll < 30){
        header.classList.remove('nav_mod')
        header.style.top = "50px"
    }

        //Boton pa arriba

        if (scroll > 500){
        
            buttonUp.style.transform = "scale(1)" 
     
         }else if (scroll < 500){
            
            buttonUp.style.transform = "scale(.0000000800135)"
    
         }
}

document.getElementById("btn_menu").addEventListener("click", mostrar_menu)

function mostrar_menu(){
    
    menu.classList.toggle("mover_contenido");
    body.classList.toggle("mover_contenido");
    nav.classList.toggle("mover_nav");
}

window.addEventListener("resize", function(){

    if(window.innerWidth >760){
        menu.classList.remove("mover_contenido");
        body.classList.remove("mover_contenido");
        nav.classList.remove("mover_nav");
    }
})



// Subir para arriba o Scroll up

//Trayendo el boton
document.getElementById("btn_arriba").addEventListener("click", scrollUp);

function scrollUp(){
    
    var currentScroll= document.documentElement.scrollTop || document.body.scrollTop;
    
    if(currentScroll > 0){
        window.requestAnimationFrame(scrollUp);
        window.scrollTo (0 , currentScroll - (currentScroll / 10));
    }

}


buttonUp = document.getElementById("btn_arriba")

