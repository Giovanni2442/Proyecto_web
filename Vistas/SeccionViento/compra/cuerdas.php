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
    $query = "UPDATE FROM tabla WHERE id = ?";
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
