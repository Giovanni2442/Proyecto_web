<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estiloIniciar.css"> 
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
        
        <h1>Iniciar Sesión</h1>
        <section class="cntform">

            <form  method="POST" class="form">
                 <?php
                    include "../pruebas/pruIniciar.php";
                 ?>
                
                <div class="correo">
                    <p>Correo: </p>
                    <input type="text" name="Correo" id="correo"  placeholder="Ingrese Correo Electronico">
                </div>
                <div class="password">
                    <p>Contraseña: </p>
                    <input type="password" name="password" id="password"  placeholder="Ingrese su Contraseña">
                </div>
                <div class="btn">
                    <input type="submit" name="agregar" id="Agregar" value="Agregar" >
                </div>
            </form>
        </section>

    </div>
    
</body>
</html>