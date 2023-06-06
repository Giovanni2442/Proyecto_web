<?php
function eliminarRegistro($id) {
    // Realizar la conexión a la base de datos
    $conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Preparar la consulta para eliminar el registro
<<<<<<< HEAD
    $query = "UPDATE FROM tabla WHERE id = ?";
=======
<<<<<<< HEAD
    $query = "UPDATE FROM tabla WHERE id = ?";
=======
    $query = "DELETE FROM tabla WHERE id = ?";
>>>>>>> 6af3d7e7b0e8808223874d63cff4da5e96b0d31d
>>>>>>> 76f25049b27c3acb085913ae2017c62d6ddf39e1
    $statement = mysqli_prepare($conexion, $query);

    // Vincular el parámetro de ID a la consulta preparada
    mysqli_stmt_bind_param($statement, "i", $id);

    // Ejecutar la consulta
    $resultado = mysqli_stmt_execute($statement);

    // Verificar si la eliminación fue exitosa y redirigir a otra pagina
    if ($resultado) {
        header("Location: comprarCuerdas.html");
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }

    // Cerrar el statement y la conexión a la base de datos
    mysqli_stmt_close($statement);
    mysqli_close($conexion);
}

// Ejemplo de uso de la función eliminarRegistro
$idEliminar = 1; // ID del registro a eliminar
eliminarRegistro($idEliminar);
?>
