// Obtener todos los elementos necesarios del carrusel
const carruPri = document.querySelector('.mnuCarruPri');
const itemsCarru = carruPri.querySelectorAll('.itemsCarru');
const flchCarru = carruPri.querySelectorAll('.flchCarru');

let currentItem = 0; // Iniciar en la primera imagen

function cambiarImagen() {
  // Ocultar la imagen actual
  itemsCarru[currentItem].classList.remove('active');
  flchCarru[currentItem].classList.remove('active');

  // Cambiar al siguiente ítem y envolver al principio si se llega al final
  currentItem = (currentItem + 1) % itemsCarru.length;

  // Mostrar el nuevo ítem
  itemsCarru[currentItem].classList.add('active');
  flchCarru[currentItem].classList.add('active');
}

// Llamar a la función cambiarImagen() cada 5 segundos
setInterval(cambiarImagen, 5000);