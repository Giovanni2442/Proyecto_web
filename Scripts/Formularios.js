
//Verifica si se preciono un boton para 
//Desplegar un formulario
function mostrarFormulario(elemento){
    var formulario = document.getElementById(elemento);
    if (formulario.style.display === "none") {
        formulario.style.display = "block"; // Mostrar el formulario si está oculto
    } else {
        formulario.style.display = "none"; // Ocultar el formulario si está visible
  }
}

function Saludar() {
    console.log("Squen coT0"); // Muestra el saludo en la consola del navegador
  }