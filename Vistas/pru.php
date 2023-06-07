<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="mostrarModal('modal')">Ingresar</button>

<div id="modal" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal()">&times;</span>
        <h2>Eliminar</h2>
        <p>¿Estás seguro de que deseas eliminar?</p>

        <div><span>MODIFICACIÓN</span></div>
        <form id="formulario-elimina" method="POST" class="formulario">
                    <?php
                    require_once '../pruebas/pruEliminar.php';
                    $elimina = new pruEliminar();
                    $query = $elimina->elimUsser('eliminar');
                    ?>

                    <div class="name">
                        <p>ID : </p>
                        <input type="text" name="id" id="nombre" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="apellidoP">
                        <p>Nombre: </p>
                        <input type="text" name="nombre" id="ApellidoP" placeholder="Ingrese sus apellidos">
                    </div>

                    <div id="btnRegister">
                        <input type="submit" name="eliminar" id="eliminar" value="eliminar">
                    </div>
                </form>
    </div>
</div>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-contenido {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .cerrar {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .cerrar:hover,
    .cerrar:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    function mostrarModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = 'block';
    }

    function cerrarModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
    }
</script>

</body>
</html>