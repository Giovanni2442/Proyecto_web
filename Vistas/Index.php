<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/77451fc6ec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estiloIndex.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/jquery.dataTables.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

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
                        <img src="ImgIndex/registro.png">
                        <a href="registro.php">
                            Registrarse
                        </a>
                        
                    </div>
                    <div class="inicioSec">
                        <img src="ImgIndex/candado.webp">
                        <a href="iniciar.php">
                            Iniciar Sesión
                        </a>

                    </div>
                </div>
                    
            </div>

            <div class="busqueda">
                <div class="logo">
                    <img src="ImgIndex/logoPru.png" alt="">
                    <h2 class="nameSite">ACDC INSTRUMENTOS</h2>
                </div>

                <!--<button class="abir">ABRIR</button>-->

                <div class="brrBusqd" onmouseover="showList()" onmouseleave="hideList()">
                    <input id="indxSearch" onkeyup="search_instrumentos()" type="text" name="indxSearc" placeholder="Buscar...">
      
                
                <!-- ordered list--> 
                
                <ol id='list' class="list-hidden">
                    <li class=""><a href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasGeneral.html">GUITARRAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasElectricas.html">GUITARRAS ELECTRICAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasAcusticas.html">ACUSTICAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/guitarras/requinto.html">REQUINTO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/guitarras/ukelele.html">UKELELE</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/accesorios.html">ACCESORIÓS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajosGeneral.html">BAJOS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/Bajoelectrico.html">BAJO ELECTRICO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajoAcustico.html">BAJO ELECTROACÚSTICO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/accesorios.html">ACCESORIOS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/amplificadores.html">AMPLIFICADORES</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/pedaleras.html">PEDALERAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/percusiones/percusionesGeneral.html">PERCUCIONES</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Percusiones/baterias.html">BATERÍAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Percusiones/percusiones.HTML">PERCUCIÓNES</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Percusiones/platillos.html">PLATILLOS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/pedaleras.html">PEDALERAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionBajos/accesorios.html">ACCESORIOS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionViento/vientoGeneral.html">VIENTO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionViento/trompetas.html">TROMPETAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionViento/flautas.html">FLAUTAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/seccionViento/metales.html">METALES</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/audioGeneral.html">AUDIO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/microfonia.html">MICROFONIA</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/bafles.html">BAFLES ACTIVO PASIVO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/mezcladorasConsolas.html">MEZCALDORAS Y CONSOLAS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/homeStudio.html">HOME STUDIO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/djsets.html">DJ´S SETS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/audio/cables.html">ACCESORIOS, CABLES ETC...</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Teclados/tecladosGeneral.html">TECLADOS</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoElectrico.html">PIANO ELECTRICO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoClasico.html">PIANO CLASICO</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoControlador.html">PIANO CONTROLADOR</a></li>
                    <li class="instrumentos"><a href="/proyecto/Proyecto_web/Vistas/Teclados/sintetizadores.html">SINTETIZADORES</a></li>
                    
                </ol>
                </div>
            
                <div class="mnuPrin">
                    <nav>

                        <ul class="mnu-product">
                            <li>

                                <span>
                                    <a href="http://localhost/proyecto/Proyecto_web-1/Vistas/index.php">INICIO</a>
                                </span>

                                <span>
                                    <a href="guitarras/guitarras.html">GUITARRAS</a>
                                
                                </span>

                                <div class="mnu-gtarras">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="guitarras/guitarrasElectricas.html">GUITARRAS ELECTRICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="guitarras/guitarrasAcusticas.html">ACUSTICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="guitarras/requinto.html">REQUINTO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="guitarras/ukelele.html">UKELELE</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>

                                                <a href="seccionBajos/accesorios.html">ACCESORIÓS</a>

                                                <a href="/proyecto/Proyecto_web/Vistas/guitarras/Accesorios.html">ACCESORIÓS</a>
                                            </span>
                                        </li>
                                    </ul>

                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="seccionBajos/bajosGeneral.html">BAJOS</a>
                                </span>

                                <div class="mnu-bajos">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/Bajoelectrico.html">BAJO ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/bajoAcustico.html">BAJO
                                                    ELECTROACÚSTICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>

                                                <a href="seccionBajos/accesorios.html">ACCESORIOS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/amplificadores.html">AMPLIFICADORES</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/pedaleras.html">PEDALERAS</a>
                                            </span>
                                        </li>
                                                <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/amplificadores.html">AMPLIFICADORES</a>
                                            </span>
                                        </li>

                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="percusiones/percusionesGeneral.html">PERCUCIONES</a>
                                </span>

                                <div class="mnu-prcuciones">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="Percusiones/baterias.html">BATERÍAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="Percusiones/percusiones.HTML">PERCUCIÓNES</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="Percusiones/platillos.html">PLATILLOS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/pedaleras.html">PEDALERAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionBajos/accesorios.html">ACCESORIOS</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="seccionViento/vientoGeneral.html">VIENTO</a>
                                </span>

                                <div class="mnu-viento">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="seccionViento/trompetas.html">TROMPETAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionViento/flautas.html">FLAUTAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="seccionViento/metales.html">METALES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="audio/audioGeneral.html">AUDIO</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="audio/microfonia.html">MICROFONIA</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="audio/bafles.html">BAFLES ACTIVO PASIVO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="audio/mezcladorasConsolas.html">MEZCALDORAS Y CONSOLAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="audio/homeStudio.html">HOME STUDIO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="audio/djsets.html">DJ´S SETS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="audio/cables.html">ACCESORIOS, CABLES ETC...</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="Teclados/tecladosGeneral.html">TECLADOS</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="Teclados/pianoElectrico.html">PIANO ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="Teclados/pianoClasico.html">PIANO CLASICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="Teclados/pianoControlador.html">PIANO CONTROLADOR</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="Teclados/sintetizadores.html">SINTETIZADORES</a>
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
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="ImgIndex/Drums.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="ImgIndex/Drums.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="ImgIndex/Drums.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="ImgIndex/acdc.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>
        </header>

        <article class="secundario">
            <div class="produPopulares">
                <div class="tittle-Product-Popular">
                <h2>Instrumentos Populares</h2>
                </div>
                   
                    <div class="prd-Instruments">
                        <div class="cont-product">

                            <div class="Img-product">
                                <img src="ImgIndex/Guitarra-Electrica-Fender-Player-Lead-II-Black-2.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>

                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/Bajo-Electrico-Ibanez-SDGR-Azul-Metalico-GSR180-BEM-280x350.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>

                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/Bajo-Electrico-Ibanez-SDGR-Negro-GSR200-BK-280x350.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>

                        <div class="cont-product">

                            <div class="Img-product">
                                <img src="ImgIndex/Guitarra-Acustica-Cordoba-C5-SP-280x350.jpg" alt="">
                            </div>
                            <div class="product-description">

                            </div>
                        </div>
                    
                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/Guitarra-Acustica-Fender-CC-60S-Concert-Pack-Black-01-280x350.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>
                    
                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/Tarola-Tama-S.L.P.-6.5X14-Nogal-Natural-LGW1465-MBW-280x350.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>
                    
                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/PRS-SE-Custom-24-08-Eriza-Verde-Guitarra-Electrica-5-0x0-1-280x350.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>
                    
                        <div class="cont-product">
                            <div class="Img-product">
                                <img src="ImgIndex/bateria-electrica.jpg" alt="">
                            </div>

                            <div class="product-description">
                            </div>
                        </div>
                    </div>
      
            </div>
        </article>
        
        <div id="separador-Audio"></div>
        <section class="Tercero">
            <!--Promocionar Articulos de Audio-->
            <div class="prom-logo-marcas">
                <div class="prom-ctg">
                    <img src="ImgPromo/prom-Audio2.png" alt="">
                    <div id="tittle-ctg">
                        <h1>AUDIO</h1>
                    </div>
                </div>
             <!--Promocionar instrumentos-->
                <div class="prom-ctg">
                    <img src="ImgPromo/prm-Instrumentos.png" alt="">
                    <div id="tittle-ctg">
                        <h1>INSTRUMENTOS</h1>
                    </div>
                </div>
             <!--Promocionar accesorios-->
                <div class="prom-ctg">
                    <img src="ImgPromo/prom-Accesorios.png" alt="">
                    <div id="tittle-ctg">
                        <h1>ACCESORIOS</h1>
                    </div>
                    
                </div>
            </div>
        </section>

        <div id="separador-Audio"></div>
        <div id="tittle-audio">
            <h1>AUDIO</h1>
        </div>
        <section class="Cuarto">

            <div class="mnuCarruSec">
                <!--Contenido del carrucel-->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="ImgIndex/teclado.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="ImgIndex/Drums.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="ImgIndex/Drums.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="ImgIndex/acdc.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="Product-audio">
            <!--seccionar por cada 3 articulos-->
                <!--Seccion 1-->
                <div id= "sct-prd-audio" >
                    <div class="cont-prdc">
                        <img src="ImgPromo/Bosina.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>

                    <div class="cont-prdc">
                        <img src="ImgPromo/bocina.jpg" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>

                    <div class="cont-prdc">   
                        <img src="ImgPromo/MICRÓFONO_DECONDENSADOR.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>
                </div>
               <!--Seccion 2-->
                <div id= "sct-prd-audio">
                    <div class="cont-prdc">
                        <img src="ImgPromo/microfono_D5C_AKG.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>
        
                    <div class="cont-prdc"> 
                        <img src="ImgPromo/controlador_KEYLAB_ESSENTIAL.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>

                    <div class="cont-prdc"> 
                        <img src="ImgPromo/microfonos_mani_SAR21_SAMSON.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>
                </div>
                <!--Seccion 3-->
                <div id= "sct-prd-audio">
                    <div class="cont-prdc">
                        <img src="ImgPromo/micorfono_AT2035.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>
        
                    <div class="cont-prdc"> 
                        <img src="ImgPromo/audifonos_K72_AKG.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>

                    <div class="cont-prdc"> 
                        <img src="ImgPromo/amplificador4_canales_SAQH4_SAMSON.webp" alt="">   
                        <div id="desc-img">
                            <span>
                                <br> BOCINA BLUETOOTH SELECT SOUND BT1406 TECNOLÓGIA TWS<br>
                                <h1>$269.00 mxn</h1>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Quinto">
            <div class="mnuCarruTr">
                <!--Contenido imagenes carrucel-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="ImgPromo/crru-Audio-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="ImgPromo/crru-Audio-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="ImgPromo/prm-Instrumentos.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="Promo-prdc-desc">
                <div id="txt-desc">
                    <h3>DESCUENTOS</h3>
                    <span>
                        <img src="ImgGuitarras/descuentos.png">
                    </span>
                </div>
                <div id="btn-pag-desc">
                    VER
                </div>
            </div>
        </section>

        <div id="separador-Audio"></div>
        <div id="tittle-audio">
            <h1>DESCUENTOS</h1>
        </div>

        <section class="Sexto">
            <div class="prdc-desc-promo">
                <div id= "sct-prd-desc" >
                    <div class="prd-1">
                        <img src="ImgPromo/desc-btria-30%.png" alt="">
                    </div>

                    <div class="prd-2">
                        <img src="ImgPromo/desc-consolaAud-45%.png" alt="">
                    </div>

                    <div class="prd-3">  
                        <img src="ImgPromo/desc-audif-45%.png" alt="">  
                    </div>
                </div>
                
                <div id= "sct-prd-desc">
                    <div class="prd-1">
                        <img src="ImgPromo/desc-ampli-yam-38%.png" alt="">
                    </div>
        
                    <div class="prd-2">
                        <img src="ImgPromo/desc-tcld-yam-25%.png" alt="">
                    </div>

                    <div class="prd-3"> 
                        <img src="ImgPromo/desc-micrf-sm58-25%.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div id="separador-Audio"></div>
        <footer>
            <div class="inf-pgn">
                <div id="ttl-mnu-prin">
                    <span>MENU PRINCIPAL</span>
                    <ul>
                        <li>
                            <span>
                               <a href="#">GUITARRAS ELEC</a>
                            </span>
                        </li>

                        <li>
                            <span>
                                <a href="#">BAJOS</a>
                            </span>
                        </li>

                       <li>
                            <span>
                                <a href="#">METALES</a>
                            </span>
                        </li>

                        <li>
                            <span>
                                <a href="#">METALES</a>
                            </span>
                        </li>

                        <li>
                            <span>
                                <a href="#">METALES</a>
                            </span>
                        </li>
                    </ul>

                    <!--Agregar Lista
                        Guitarras
                        Bajos
                        Peruciones
                        Audio
                        Accesorios-->
                </div>

                <div id="ttl-mnu-prin">
                   <!-- <span>SUCURSAL</span> -->
                    <!--Agregar Lista
                        Guitarras
                        Bajos
                        Peruciones
                        Audio
                        Accesorios-->
                </div>
            
                <div id="ttl-mnu-prin">
                   <!-- <span>CONTACTO</span> -->
                    <!--Agregar Lista
                        Guitarras
                        Bajos
                        Peruciones
                        Audio
                        Accesorios-->
                </div>

                <div id="ttl-mnu-prin">
                    <ul>
                        <li>
                            <span>
                                <a href="">REFERENCIA DE PRUEBA</a>
                            </span>

                        </li>
                    </ul>
                   <!-- <span>POLITICAS</span>--->
                    <!--Agregar Lista
                        Guitarras
                        Bajos
                        Peruciones
                        Audio
                        Accesorios-->
                </div>

                <div id='tlt-'></div>
            </div>

            <div class = "cotc-mnu">
                <span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2002.444701062882!2d-101.62910665467122!3d21.109049238113272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe6f8e8cdbf7%3A0xff3c8cc2b5af98fc!2sInstituto%20Tecnol%C3%B3gico%20de%20Le%C3%B3n!5e0!3m2!1ses!2smx!4v1684703937941!5m2!1ses!2smx" width="500" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
            </div>
        </footer>

    </div>
    <Script src="../Scripts/carrucelAuto.js"></Script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../Scripts/busqueda.js"></script>
</body>
</html>