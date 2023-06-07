<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../Scripts/Formularios.js"></script>
    <link rel="stylesheet" type="text/css" href="../Administradores/estiloAdmUsser.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRAR USUARIOS</title>
</head>

<body>
    <header class="header">
        <div class="Inicio">
            <a href="../Vistas/Index.php">
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
            <div id="formula"  class="cnt-form">
                <form id="formulario-elimina"  method="POST"  class="formulario">
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

                <!--FORMULARIO PARA MODIFICAR USUARIOS EN ADMINISTRADOR-->
                <form id="formulario-modifica"  method="POST" class="formulario">
                    <?php
                       require_once '../pruebas/pruModificar.php';
                       $reg = new pruModificar();
                       $r = $reg->modUsser('Modificar');
                   ?>
                    
                    <div class="name">
                        <p>ID : </p>
                        <input type="text" name="id" id="id" placeholder="Ingrese su Nombre">
                    </div>

                    <div class="apellidoP">
                        <p>Nombre: </p>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="apellidoP">
                        <p>Apellido Paterno: </p>
                        <input type="text" name="ApellidoP" id="ApellidoP" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="apellidoP">
                        <p>Apellido Materno: </p>
                        <input type="text" name="ApellidoM" id="ApellidoM" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="apellidoP">
                        <p>Alias: </p>
                        <input type="text" name="alias" id="alias" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="apellidoP">
                        <p>Correo: </p>
                        <input type="text" name="Correo" id="email" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="apellidoP">
                        <p>Contraseña: </p>
                        <input type="password" name="password" id="password" placeholder="Ingrese sus apellidos">
                    </div>

                    <div id="btnRegister">
                        <input type="submit" name="Modificar" id="modificar" value="modificar">
                    </div>
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
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Alias</th>
                    <th>Email</th>
                    <th>Constraseña</th>
                </tr>
                <?php
                // Mostrar los registros en la tabla
                if ($res !== null) {
                    while ($row = $res->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_usuario"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["apellido_p"] . "</td>";
                        echo "<td>" . $row["apellido_m"] . "</td>";
                        echo "<td>" . $row["alias"] . "</td>";
                        echo "<td>" . $row["correo"] . "</td>";
                        echo "<td>" . $row["contrasena"] . "</td>";
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