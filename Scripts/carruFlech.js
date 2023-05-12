// Obtén todos los enlaces de flecha en el carrusel
var arrowLinks = document.querySelectorAll('.flchCarru a');

// Para cada enlace de flecha, agrega un evento onclick
arrowLinks.forEach(function(link) {
  link.addEventListener('click', function(e) {
    // Prevenir el comportamiento predeterminado del enlace
    e.preventDefault();

    // Aquí puedes agregar tu código para cambiar el carrusel
    // o hacer lo que necesites para actualizar la página sin refrescarla
  });
});