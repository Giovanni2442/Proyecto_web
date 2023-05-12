<?php
    include ("../persistencia/secion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estiloModCuenta.css"> 
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

        <h1>Modificar Cuenta</h1>
        <section class="cntform">

            <form  method="POST" class="form">
                 <?php
                    include "../pruebas/pruRegistrar.php"; 
                 ?>
        
                <div class="name">
                    <p>Nombre : </p>
                    <input type="text" name="nombre" id="nombre"  placeholder="<?php echo $_SESSION["name"];?>">
                </div>
                <div class="apellidoP">
                    <p>apellidos Paterno: </p>
                    <input type="text" name="ApellidoP" id="ApellidoP"  placeholder="<?php echo $_SESSION["paterno"];?>">
                </div>
                <div class="apellidoM">
                    <p>apellidos materno: </p>
                    <input type="text" name="ApellidoM" id="ApellidoM"  placeholder="<?php echo $_SESSION["materno"];?>">
                </div>
                <div class="alias">
                    <p>Alias: </p>
                    <input type="text" name="alias" id="als"  placeholder="<?php echo $_SESSION["alias"]?>">
                </div>
                <div class="correo">
                    <p>Correo: </p>
                    <input type="text" name="Correo" id="correo"  placeholder="<?php echo $_SESSION["email"]?>">
                </div>
                <div class="password">
                    <p>Contraseña: </p>
                    <input type="password" name="password" id="password"  placeholder="<?php echo $_SESSION["pass"]?>">
                </div>
                <div id="btnRegister">
                    <input type="submit" name="agregar" id="Agregar" value="Registrar" >
                </div>
            </form>
        </section>
    </div>
    
</body>
</html>