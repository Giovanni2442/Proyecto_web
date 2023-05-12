    //Abre y cierra el submenu del usuario
    //Opciones: Cerrar seción, Configuración: Modificar atributos del usuario
    var btnUsser = document.getElementById('imgUsser');
    var divOptions = document.getElementById('usserOptions');

    btnUsser.addEventListener("click",function(){
        if(divOptions.style.display === "none"){
            divOptions.style.display = "block";
        }else{
            divOptions.style.display = "none";
        }
    });

    
    
