<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "../persistencia/conectar.php";

    $con = new conectar();
    $res = $con->numFilas();
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
        <?php
        // Mostrar los registros en la tabla
        if ($res !== null) {
            while ($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellido_p"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
        }
        ?>
    </table>

</body>

</html>