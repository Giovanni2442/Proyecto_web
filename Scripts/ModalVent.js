function mostrarFormulario(formularioId) {
    var modal = document.getElementById('modal');
    modal.style.display = 'block';
    var formulario = document.getElementById(formularioId);
    formulario.style.display = 'block';
}

function cerrarModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
}