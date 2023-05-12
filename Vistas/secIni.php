<?php
    include ("../persistencia/secion.php");       
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="estiloSecIni.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="principal">
        <header class="header">

            <div class="usuario">
                <div class="cntContact">
                    <div class="correo">
                        <img src="ImgIndex/sobre.png">
                        <a href="">
                            prueba@test.com
                         </a>
                    </div>

                    <div class="numero">
                        <img src="ImgIndex/whatsapp.png">
                        <a href="">
                            477 725 0511
                        </a>
                    
                    </div>

                    <div class="contacto">
                        <a href="">
                            <img src="ImgIndex/facebook.png">
                        </a>
                       <a href="">
                        <img src="ImgIndex/Instagram.png">
                       </a>
                       
                    </div>

                </div>

                <div class="cntRegister">
                    <div class="registro">
                        <a id = "imgUsser" href="#">
                            <img  src="ImgIndex/registro.png">
                        </a>
                        <div id="usserOptions">
                            <ul>
                                <li>
                                    <a href="/pruebas/pruCerrarSecion.php">Cerrar Seción</a>
                                </li>
                                <li>
                                    <a href="/Vistas/modUsser.php">Configuración</a>
                                </li>
                            </ul>
                        </div>
                              
                    </div>

                    <span>
                        <?php
                         echo $_SESSION["name"];
                           // echo $_SESSION["name"];
                           
                        ?>
                    </span> 
                </div>
                    
            </div>

            <div class="busqueda">
                <div class="logo">
                    <img src="ImgIndex/logoPru.png" alt="">
                    <h2 class="nameSite">NOMBRE PAGINA</h2>
                </div>

                <div class="brrBusqd">
                    <input type="text" id="indxSearch" name="indxSearc" placeholder = "Buscar...">
                </div>

                <div class="mnuPrin">
                    <nav>
                        <ul class="mnu-product">
                            <li>
                                <span>
                                    <a href="#">GUITARRAS</a>
                                </span>

                                    <div class="mnu-gtarras">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">GUITARRAS ELECTRICAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">ACUSTICAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">REQUINTO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">UKELELE</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">ACCESORIÓS</a>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>
                                    
                            </li>
                            <li>
                                <span>
                                    <a href="">BAJOS</a>
                                </span>

                                    <div class="mnu-bajos">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">BAJO ELECTRICO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">BAJO ELECTROACÚSTICO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">ACCESORIOS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">AMPLIFICADORES</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PEDALERAS</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                            </li>
                            <li>
                                <span>
                                <a href="">PERCUCIONES</a>  
                                </span>

                                    <div class="mnu-prcuciones">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">BATERÍAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PERCUCIÓNES</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PLATILLOS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PEDALERAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">ACCESORIOS</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                            </li>
                            <li>
                                <span>
                                <a href="">VIENTO</a>  
                                </span>
                                    
                                    <div class="mnu-viento">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">TROMPETAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">FLAUTAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">METALES</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>      
                            </li>

                            <li>
                                <span>
                                    <a href="">AUDIO</a>  
                                </span>

                                    <div class="mnu-audio">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">MICROFONIA</a>
                                                </span>
                                            </li>
                                           <li>
                                                <span>
                                                    <a href="#">BAFLES ACTIVO PASIVO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">MEZCALDORAS Y CONSOLAS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">HOME STUDIO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">DJ´S SETS</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">ACCESORIOS, CABLES ETC...</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                            </li>

                            <li>                                
                                <span>
                                    <a href="">TECLADOS</a>    
                                </span>

                                    <div class="mnu-audio">
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="#">PIANO ELECTRICO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PIANO CLASICO</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">PIANO CONTROLADOR</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="#">SINTETIZADORES</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="carrito">
                    <img src="ImgIndex/carrito.png" alt="">
                </div>
                
            </div>

            <div class="mnuCarruPri">
                <div class="itemsCarru" id="itm-1">
                        <div class="trjCarru" id="trj-1">
                            <img src="ImgIndex/img-g.jpeg" alt="img-1-g">
                        </div>
                        <div class="flchCarru">
                            <a href="#itm-3"><i class="fa-solid fa-arrow-left"></i></a>
                            <a href="#itm-2"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="itemsCarru" id="itm-2">
                        <div class="trjCarru" id="trj-2">
                            <img src="ImgIndex/Drums.jpg" alt="img-1-g">
                        </div>
                        <div class="flchCarru">
                            <a href="#itm-1"><i class="fa-solid fa-arrow-left"></i></a>
                            <a href="#itm-3"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="itemsCarru" id="itm-3">
                        <div class="trjCarru" id="trj-3">
                            <img src="ImgIndex/teclado.webp" alt="img-1-g">
                        </div>
                        <div class="flchCarru">
                            <a href="#itm-2"><i class="fa-solid fa-arrow-left"></i></a>
                            <a href="#itm-1"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <article class="secundario">
        <div class="produPopulares">
                <h2>Instrumentos Populares</h2>
                   
                    <div class="prd-Instruments">
                        <div>
                            <span>
                                Imagen1
                            </span>
                        </div>
                        <div>
                            <span>Imagen2</span>
                        </div>
                    
                        <div>
                            <span>Imagen3</span>
                        </div>
                    
                        <div>
                            <span>Imagen3</span>
                        </div>
                    
                        <div>
                            <span>Imagen3</span>
                        </div>
                    
                        <div>
                            <span>Imagen3</span>
                        </div>
                        
                    </div>

            </div>
        </article>

        <section class="Tercero">

        </section>

    </div>

    <Script src="../Scripts/dplPru.js"></Script>
</body>
</html>