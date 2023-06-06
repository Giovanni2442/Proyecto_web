<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estiloRegistro.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Registrar">
        <header class="header">
            <div class="Inicio">
                <a href="Index.php">
                    <img src="ImgIndex/Inicio.png">
                </a>
            </div>
        </header>
        
        <h1>Crear una Cuenta</h1>
        <section class="cntform">

            <form  method="POST" class="form">
                <?php
                    include "../pruebas/pruRegistrar.php";

                   $register = new pruRegistrar();
                   $add = $register->agregarUsser('agregar');
                ?>
            
                <div class="name">
                    <p>Nombre : </p>
                    <input type="text" name="nombre" id="nombre"  placeholder="Ingrese su Nombre">
                </div>
                <div class="apellidoP">
                    <p>apellidos Paterno: </p>
                    <input type="text" name="ApellidoP" id="ApellidoP"  placeholder="Ingrese sus apellidos">
                </div>
                <div class="apellidoM">
                    <p>apellidos materno: </p>
                    <input type="text" name="ApellidoM" id="ApellidoM"  placeholder="Ingrese sus apellidos">
                </div>
                <div class="alias">
                    <p>Alias: </p>
                    <input type="text" name="alias" id="als"  placeholder="Ingrese un Alias">
                </div>
                <div class="correo">
                    <p>Correo: </p>
                    <input type="text" name="Correo" id="correo"  placeholder="Ingrese Correo Electronico">
                </div>
                <div class="password">
                    <p>Contraseña: </p>
                    <input type="password" name="password" id="password"  placeholder="Ingrese su Contraseña">
                </div>
                <div id="btnRegister">
                    <input type="submit" name="agregar" id="Agregar" value="Registrar" >
                </div>
            </form>
        </section>
    </div>
    
</body>
</html>