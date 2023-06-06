<?php
    include ("../persistencia/secion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estiloSecAdin.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA ADMINISTRADOR</title>
</head>
<body>
        <header class="header">
            <div class="Inicio">
                <a href="Index.php">
                    <img src="ImgIndex/Inicio.png">
                </a>
            </div>
        </header>

    <div class="PrincipalAdmin">
        
            <div class="cnt-Admin">
                <div class="ttl-Admin">
                    <h1>¡BIENVENIDO ADMINISTRADOR : <?php echo $_SESSION["name"];?></h1>
                    <h2>!SELECCIÓNAR LA OPCIÓN PARA ADMINISTRAR¡</h2>
                </div>
                
                <div class="cnt-btns">
                    
                        <div class="btn">
                            <a href="../Administrar/AdmUsuarios.php">
                                <span>USUARIOS</span>
                            </a>
                        
                        </div>
                    
                        <div class="btn">
                            <a href="../Administrar/AmdProductos.php">
                                <span>PRODUCTOS</span>
                            </a>

                        </div>
                </div>
                
            </div>
    </div>
</body>
</html>