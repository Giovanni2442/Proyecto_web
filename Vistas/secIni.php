<?php
include("../persistencia/secion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="estiloSecIni.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bienvenido</title>
</head>

<body>
    <div class="principal">
        <header class="header">
            <div class="usuario">
                <div class="cntContact">
                    <div class="correo">
                        <img src="ImgIndex/sobre.png">
                        <a href="">
                            starguit@gmail.com
                        </a>
                    </div>

                    <div class="numero">
                        <img src="ImgIndex/whatsapp.png">
                        <a href="https://web.whatsapp.com">
                            477 725 0511
                        </a>

                    </div>

                    <div class="contacto">
                        <a href="https://www.facebook.com">
                            <img src="ImgIndex/facebook.png">
                        </a>
                        <a href="https://www.instagram.com">
                            <img src="ImgIndex/Instagram.png">
                        </a>

                    </div>


                </div>

                <div class="cntRegister">
                    <div class="registro">
                        <a id="imgUsser" href="#">
                            <img src="ImgIndex/registro.png">
                        </a>
                        <div id="usserOptions">
                            <ul>
                                <li>
                                    <a href="../pruebas/pruCerrarsecion.php">Cerrar Seción</a>
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
                    <h2 class="nameSite">STARGUIT</h2>
                </div>

                <div class="brrBusqd">
                    <input type="text" id="indxSearch" name="indxSearc" placeholder="Buscar...">
                </div>

                <div class="mnuPrin">
                    <nav>

                        <ul class="mnu-product">
                            <li>
                                <span>
                                    <a
                                        href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasGeneral.html">GUITARRAS</a>
                                </span>

                                <div class="mnu-gtarras">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasElectricas.html">GUITARRAS
                                                    ELECTRICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasAcusticas.html">ACUSTICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/requinto.html">REQUINTO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/ukelele.html">UKELELE</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/Accesorios.html">ACCESORIÓS</a>
                                            </span>
                                        </li>
                                    </ul>

                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajosGeneral.html">BAJOS</a>
                                </span>

                                <div class="mnu-bajos">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/Bajoelectrico.html">BAJO
                                                    ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajoAcustico.html">BAJO
                                                    ELECTROACÚSTICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionBajos/amplificadores.html">AMPLIFICADORES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a
                                        href="/proyecto/Proyecto_web/Vistas/percusiones/percusionesGeneral.html">PERCUCIONES</a>
                                </span>

                                <div class="mnu-prcuciones">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/baterias.html">BATERÍAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/percusiones.HTML">PERCUCIÓNES</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/platillos.html">PLATILLOS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionBajos/pedaleras.html">PEDALERAS</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/seccionViento/vientoGeneral.html">VIENTO</a>
                                </span>

                                <div class="mnu-viento">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/trompetas.html">TROMPETAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/flautas.html">FLAUTAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/metales.html">METALES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/audio/audioGeneral.html">AUDIO</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/audio/microfonia.html">MICROFONIA</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/bafles.html">BAFLES ACTIVO
                                                    PASIVO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/mezcladorasConsolas.html">MEZCALDORAS
                                                    Y CONSOLAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/homeStudio.html">HOME
                                                    STUDIO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/djsets.html">DJ´S SETS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/cables.html">ACCESORIOS,
                                                    CABLES ETC...</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/Teclados/tecladosGeneral.html">TECLADOS</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoElectrico.html">PIANO
                                                    ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoClasico.html">PIANO
                                                    CLASICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoControlador.html">PIANO
                                                    CONTROLADOR</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Teclados/sintetizadores.html">SINTETIZADORES</a>
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

            <section class="banneer">
                <div class="banner-content">

                    <h1>Bienvenido a starguit</h1>
                    <a href="/proyecto/Proyecto_web/Vistas/Percusiones/baterias.html">Ver articulos</a>
                </div>
            </section>




            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Novedades</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/22.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">YAMAHA PIANO VERTICAL CON BANCO NEGRO JU109PE</h3>
                            <p class="text-center" style="color: white">
                            Un excelente ejemplo de belleza natural, el modelo JU109 es una combinación exquisita de fabricación y tecnología de Yamaha que hacen de él un instrumento perfectamente asequible y que tocarlo sea un placer.
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/25.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">CP8 QSC ALTAVOZ AMPLIFICADO</h3>
                            <p class="text-center" style="color: white">
                            CP8 Altavoz amplificado compacto de 8 pulgadas
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/24.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">FENDER GUITARRA ELÉCTRICA TELECASTER SIGNATURE JAMES BURTON 01086602888</h3>
                            <p class="text-center" style="color: white">
                            GUITARRA ELECTRICA FENDER JAMES BURTON                            </p>
                        </div>



                    </div>
                </div>
            </section>



            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Tarolas</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/2.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">MPML3600CNL</h3>
                            <p class="text-center" style="color: white">
                            Tarola 13 x 6, Maple Gloss Natural
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/6.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">BST134BK</h3>
                            <p class="text-center" style="color: white">
                            Tarola Tama 13 X 4 Bst134bk Metalworks Negra Acero
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/10.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">GRETSCH BATERÍA ACÚSTICA DE 5 PIEZAS ENERGY 22 4E825</h3>
                            <p class="text-center" style="color: white">
                            Batería acústica de 5 piezas, incluye bombo de 22" x 18", tarola de 14" x 5.5", tom de aire de 10” x 7”, tom de aire de 12" x 8" y tom de piso de 16” x 16”, fabricada con 7 capas de madera poplar, hardware cromado, aros triple flanged de 1.6 mm, bordes redondeados de 30 grados, incluye hardware (pedal de bombo, atril para hi-hats, atril de tarola, atril de platillo recto y atril de platillo con boom).
                            </p>
                        </div>



                    </div>
                </div>
            </section>


            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/13.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">GRETSCH GUITARRA ELÉCTRICA G2420 STREAMLINER™ 2804700569</h3>
                            <p class="text-center" style="color: white">
                            Grande, audaz y recto, el G2420 Streamliner ™ Hollow Body Single-Cut con Chromatic II está diseñado para el guitarrista moderno que anhela algo más allá de la norma. Una guitarra imponente para músicos poderosos, el sonido moderno, la electrónica actualizada y el estilo auténticamente elegante de la G2420 crean la última versión de That Great Gretsch Sound! 
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/12.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">GRETSCH GUITARRA ELÉCTRICA G2410TG STREAMLINER™ HOLLOW BODY SINGLE-CUT WITH BIGSBY® AND GOLD HARDWARE 2804800508</h3>
                            <p class="text-center" style="color: white">
                            Grande, audaz y recto, el G2410TG Streamliner™ Hollow Body Single-Cut con Bigsby® y herrajes dorados está diseñado para el guitarrista moderno que anhela algo más allá de la norma. Una guitarra dominante para guitarristas poderosos, los sonidos modernos, el cuerpo de arce más delgado, la electrónica actualizada y el estilo auténticamente elegante de la G2410TG crean la última versión de That Great Gretsch® Sound!
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/99.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">FENDER SQUIER GUITARRA ELÉCTRICA STRATOCASTER CONTEMPORARY ZURDA 0320229565</h3>
                            <p class="text-center" style="color: white">
                            El Squier Contemporáneo Stratocaster HH es una opción excelente para el jugador moderno que busca características progresivas en una guitarra que tiene auténtico vibo y estilo.
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Trompetas</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/8.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">JUPITER TROMPETA Bb LAQUEADA JTR500</h3>
                            <p class="text-center" style="color: white">
                            Trompeta Jupiter en tono de Bb, cuerpo de Latón Lacado, campana de 4.8 ", tercera válvula deslizable, tubo de .460" de diámetro, sillín de pulgar deslizante en la primera válvula, incluye estuche rígido.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/20.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">YAMAHA TROMPETA BB YTR5330MRC</h3>
                            <p class="text-center" style="color: white">
                            Trompeta Yamaha intermedia modelo Mariachi, combinada color plata/dorado en tono de B, pabellón de 2 piezas en bronce amarillo, incluye boquilla TR-11B4 y funda de transporte.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/21.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">YAMAHA TROMPETA YAMAHA BB CUSTOM LIGERA YTR8310Z//3</h3>
                            <p class="text-center" style="color: white">
                            El Z nació de la larga y cercana asociación de Yamaha con el legendario trompetista Bobby Shew. Un músico increíblemente versátil, Shew necesitaba un instrumento eficiente que pudiera gritar un poderoso plomo y tocar baladas suaves y suaves. Con la Z,
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Bocinas</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/1.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">BEHRINGER BAFLE B212D</h3>
                            <p class="text-center" style="color: white">
                            Sistema activo de altavoces PA de 2 vías y 550 vatios con woofer de 12 "y controlador de compresión de 1.35"
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/14.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">YAMAHA BAFLE PASIVO DE 12" 300W RMS BR12</h3>
                            <p class="text-center" style="color: white">
                            El potente sonido de la serie Club V en altavoces increíblemente asequibles.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/16.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">BEHRINGER BAFLE B212XL</h3>
                            <p class="text-center" style="color: white">
                            Sistema de altavoces PA de 2 vías y 800 vatios con woofer de 12 "y controlador de compresión de titanio de 1.75"
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/3.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">FENDER GUITARRA ACUSTICA DG8S NATURAL PACK 0950801121</h3>
                            <p class="text-center" style="color: white">
                            GUITARRA ACÚSTICA DG8S NATURAL PACK
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/4.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">FENDER GUITARRA ACÚSTICA CT60S BLACK 0961713006</h3>
                            <p class="text-center" style="color: white">
                            GUITARRA FENDER CT 60S BLK
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/9.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">FENDER GUITARRA ACÚSTICA CD-100 ZURDA 0961534021</h3>
                            <p class="text-center" style="color: white">
                            Miles de guitarristas han elegido la CD100 como su "primera acústica de verdad" por una sencilla razón: su combinación de calidad y excelente valor la convierten en perfecta si buscas una guitarra de cómodo acabado satinado por un precio asequible
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <!--<section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/15.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/20.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/21.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                    </div>
                </div>-->
            
                <hr class="mb-4 text-primary">
                <footer class="bg-black">
                    <div class="container text-center text-md-start">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                                <hr class="mb-4 text-primary">
                                <p style="color: white;">
                                    Tienda donde ofrecemos una amplia variedad de guitarras,
                                    desde clásicas y acústicas hasta eléctricas y de jazz.
                                    Desde los Marzo del 78 cautivando a musicos en mejorar sus
                                    instrumentos tienda especializada en guitarras vintage y únicas,
                                    contamos con una trayectoria historica de décadas pasadas.
                                    Compartía con entusiasmo los detalles y curiosidades con clientes.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Ayuda</h5>
                                <hr class="mb-4 text-primary">
                                <p><a href="#" class="text-light">Envio</a></p>
                                <p><a href="#" class="text-light">Devolución</a></p>
                                <p><a href="#" class="text-light">Reembolso</a></p>
                                <p><a href="#" class="text-light">Rastrear Pedido</a></p>
                            </div>
                            <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Servicio Cliente</h5>
                                <hr class="mb-4 text-primary">
                                <p><a href="#" class="text-light">Bolsa de empleo</a></p>
                                <p><a href="#" class="text-light">Quejas y sugerencias</a></p>
                                <p><a href="#" class="text-light">Reportar errores</a></p>
                                <p><a href="#" class="text-light">Formas de pago</a></p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
                                <hr class="mb-4 text-primary">
                                <p style="color: white;"><i class="fas fa-home m-3"></i>León, Guanajuato. México</p>
                                <p style="color: white;"><i class="fas fa-envelope m-3"></i>guitar@gmail.com</p>
                                <p style="color: white;"><i class="fas fa-phone m-3"></i>477 890 78 87</p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Mapa</h5>
                                <hr class="mb-4 text-primary">
                                <div class="text-center">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.785622013856!2d-101.6612489855979!3d21.16154248594438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842be0ce670f2395%3A0x2e5376c6488a5bcb!2sLe%C3%B3n%2C%20Guanajuato%2C%20Mexico!5e0!3m2!1sen!2sus!4v1621642008260!5m2!1sen!2sus"
                                        width="300" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4 text-primary">
                        <div class="text-center mb-2">
                            <p style="color: white;">&copy; Todos los derechos reservados <a href="#"><strong
                                        class="text-primary">1978-2023</strong></a></p>
                        </div>
                        <div class="text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/" class="text-light"><i
                                            class="fab fa-facebook-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.twitter.com/" class="text-light"><i
                                            class="fab fa-twitter-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.youtube.com/" class="text-light"><i
                                            class="fab fa-youtube-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/" class="text-light"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.messenger.com/" class="text-light"><i
                                            class="fab fa-facebook-messenger"></i></a></li>
                            </ul>

                        </div>

                    </div>
                </footer>
                <script src="../Scripts/busqueda.js"></script> 
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="../Scripts/animacion.js"></script>


</body>
</html>