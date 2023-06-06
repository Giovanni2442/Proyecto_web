<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Scripts/Formularios.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloAdmUsuarios.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRAR USUARIOS</title>
</head>

<body>
    <header class="header">
        <div class="Inicio">
            <a href="Index.php">
                <img src="/Vistas/ImgIndex/Inicio.png">
            </a>
        </div>
    </header>

    <div class="PrincipalAdmin">

        <div class="ttl-Admin">
            <h1>ADMINISTRADOR DE USUARIOS</h1>
        </div>

        <!--BOTONES DE ELECCIÓN FORMULARIOS-->
        <div class="cnt-btns">
            <button onclick="mostrarFormulario('formulario-elimina')">
                <span>ELIMINAR</span>
            </button>

            <button onclick="mostrarFormulario('formulario-modifica')">
                <span>MODIFICAR</span>
            </button>

            <button onclick="mostrarFormulario('formulario-register')">
                <span>INGRESAR</span>
            </button>
        </div>

        <div class="cnt-forms">
            <!--FORMULARIO PARA ELIMINAR USUARIOS EN ADMINISTRADOR-->
            <div id="formula" class="cnt-form">
                <form id="formulario-elimina" class="formulario">
                    <!-- Aquí va tu formulario HTML -->
                    <label for="nombre">INGRESE ID:</label>
                    <input type="text" id="id" name="id">

                    <label for="email">INGRESE CORREO:</label>
                    <input type="email" id="email" name="email">

                    <input type="submit" value="Enviar">
                </form>

                <!--FORMULARIO PARA MODIFICAR USUARIOS EN ADMINISTRADOR-->
                <form id="formulario-modifica"  class="formulario">
                    <?php
                       require_once '../pruebas/pruModificar.php';
                       $reg = new pruModificar();
                       $r = $reg->modUsser('modificar');
                   ?>
                    
                    <label for="nombre">INGRESE ID:</label>
                    <input type="text" id="id" name="id">

                    <label for="email">INGRESE CORREO:</label>
                    <input type="email" id="email" name="email">

                    <input type="submit" name="modificar" value="Enviar">
                </form>


                <!--FORMULARIO PARA REGISTRAR USUARIOS EN ADMINISTRADOR-->
                <form id="formulario-register" method="POST" class="formulario">
                    <?php
                        require_once '../pruebas/pruRegistrar.php';
                        $reg = new pruRegistrar();
                        $r = $reg->agregarUsser('agregar');
                    ?>

                    <div class="name">
                        <p>Nombre : </p>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="apellidoP">
                        <p>apellidos Paterno: </p>
                        <input type="text" name="ApellidoP" id="ApellidoP" placeholder="Ingrese sus apellidos">
                    </div>
                    <div class="apellidoM">
                        <p>apellidos materno: </p>
                        <input type="text" name="ApellidoM" id="ApellidoM" placeholder="Ingrese sus apellidos">
                    </div>
                    <div class="alias">
                        <p>Alias: </p>
                        <input type="text" name="alias" id="als" placeholder="Ingrese un Alias">
                    </div>
                    <div class="correo">
                        <p>Correo: </p>
                        <input type="text" name="Correo" id="correo" placeholder="Ingrese Correo Electronico">
                    </div>
                    <div class="password">
                        <p>Contraseña: </p>
                        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
                    </div>
                    <div id="btnRegister">
                        <input type="submit" name="agregar" id="Agregar" value="Registrar">
                    </div>
                </form>
            </div>
        </div>

        <div class="cnt-T">
            <?php

            include_once "../persistencia/conectar.php";

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
        </div>
    </div>
</body>

</html>