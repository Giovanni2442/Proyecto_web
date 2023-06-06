<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="formulario-elimina" class="formulario">
                    <?php
                       require_once '../pruebas/pruEliminar.php';
                       $conect = new conectar();
                       $reg = new pruEliminar();
                       $r = $reg->elimUsser('eliminar');
                    ?>

                    <label for="nombre">INGRESE ID:</label>
                    <input type="text" name="id" id="id">

                    <label for="email">INGRESE EL NOMBRE:</label>
                    <input type="text" name="name" id="name" >

                    <input type="submit" name ="eliminar" value="Enviar">
                </form>
    </body>
</html>