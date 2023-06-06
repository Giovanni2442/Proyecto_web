<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "2442";
$dbname = "tienda_musica";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Registros de la tabla</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
    </tr>
    <?php
    // Mostrar los registros en la tabla
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>
