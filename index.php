<?php
    session_start();
    require 'opciones-idioma.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Lag</title>
    <link rel="shortcut icon" href="./assets/icons/rocklag-logotipo.png" type="image/x-icon">
    <!--CDN Animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--CDN font awasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!--Estilos css-->
    <link rel="stylesheet" href="./css/estilos.min.css">
</head>

<body>

    <header class="header">

        <div class="video">
            <video autoplay muted loop>
                <source src="./assets/video/video.mp4" type="video/mp4">
                <source src="./assets/video/video.mp4"" type=" video/ogg"> <source src="./assets/video/video.mp4"
                    type="video/wav">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="capa">
        </div>
        <div id="contenido" class="contenido">
            <nav id="nav" class="navegacion">
                <a href="#" title="RockLag">
                    <div id="logo" class="logo"></div>
                </a>
                <div class="items">
                    <ul id="enlaces" class="enlaces">
                        <a class="active" onclick="return remover();" href="./index.html">
                            <li><?= $inicio?></li>
                        </a>
                        <a onclick="return remover();" href="#nosotros">
                            <li><?= $nosotros?></li>
                        </a>
                        <a onclick="return remover();" href="#productos">
                            <li><?= $productos?></li>
                        </a>
                        <a onclick="return remover();" href="#galeria">
                            <li><?= $galeria?></li>
                        </a>
                        <a onclick="return remover();" href="#contacto">
                            <li><?= $contacto?></li>
                        </a>
                        <div class="lenguaje">
                            <a href="detectar-idioma.php?languaje=es">ES</a>
                            <a href="detectar-idioma.php?languaje=en">ENG</a>
                        </div>
                    </ul>
                    <i id="menMov" class="fas fa-bars menMov"></i>
                </div>

            </nav>
            <div class="pieHeader">
                <div class="correo">
                    <a href="mailto:info@contacto.com" title="Correo">
                        <div class="iconCorreo"></div>
                        <p>info@contacto.com</p>
                    </a>
                </div>
                <div class="telefono">
                    <a href="tel:8711458712" title="Teléfono">
                        <div class="iconTel"></div>
                        <p>87 11 45 87 12</p>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <!-- Nosotros -->
    <section id="nosotros" class="nosotros">
        <div class="imgContenedor wow animate__animated animate__fadeInRight animate__delay-.8s">
            <div class="img1 imgNosotros wow slideInLeft"></div>
        </div>
        <div class="txtContenedor wow animate__animated animate__fadeInDown animate__delay-.8s">
            <div class="titulo">
                <h2><?= $sobre_nosotros?></h2>
            </div>
            <div class="descripcion">
                <p><?= $descripcion?></p>
            </div>
        </div>
    </section>
    <!-- Productos -->
    <section id="productos" class="productos">
        <div class="titulo wow animate__animated animate__fadeInDown animate__delay-.8s">
            <h2><?= $titulo_producto?></h2>
            <p><?= $subtitulo?></p>
        </div>
        <div class="catalogo wow animate__animated animate__fadeInRight animate__delay-.8s">
            <div class="contenedorCat">
                <div class="imgCat1"></div>
                <h3>Amarillo Verona</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat2"></div>
                <h3>Blanco Coco</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat3"></div>
                <h3>Blanco Mexicano</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat4"></div>
                <h3>Café Oscuro</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat5"></div>
                <h3>Calcita Amarilla</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat6"></div>
                <h3>Calcita Café</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat7"></div>
                <h3>Champagne</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat8"></div>
                <h3>Geoda</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat9"></div>
                <h3>Persian Cream</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat10"></div>
                <h3>Pirata</h3>
            </div>
            <div class="contenedorCat">
                <div class="imgCat11"></div>
                <h3>Rojo Caliente</h3>
            </div>
        </div>
        <div class="titulo wow animate__animated animate__fadeInDown animate__delay-.8s" style="margin-top: 30px;">
            <h2><?= $titulo_size?></h2>
        </div>
        <div class="caja-info">
            <!-- Tabla size -->
            <div class="tabla">
                <table class="tabla-size">
                    <tr>
                        <th><?= $size ?></th>
                        <th><?= $paso ?></th>
                        <th><?= $retenido ?></th>
                    </tr>
                    <tr>
                        <td>No. -30</td>
                        <td>30 mesh</td>
                        <td>Pan</td>
                    </tr>
                    <tr>
                        <td>No. 12-30</td>
                        <td>12 mesh</td>
                        <td>30 mesh</td>
                    </tr>
                    <tr>
                        <td>No. 00</td>
                        <td>1/16"</td>
                        <td>Pan</td>
                    </tr>
                    <tr>
                        <td>No. 0</td>
                        <td>1/8</td>
                        <td>1/16"</td>
                    </tr>
                    <tr>
                        <td>No. 1(A)</td>
                        <td>1/4"</td>
                        <td>1/8"</td>
                    </tr>
                    <tr>
                        <td>No. 2</td>
                        <td>3/8"</td>
                        <td>1/4"</td>
                    </tr>
                    <tr>
                        <td>No. 2-3(B)</td>
                        <td>1/2"</td>
                        <td>1/4"</td>
                    </tr>
                    <tr>
                        <td>No. 3-5</td>
                        <td>3/4"</td>
                        <td>3/8"</td>
                    </tr>
                    <tr>
                        <td>No. 4-7 (C)</td>
                        <td>1"</td>
                        <td>1/2"</td>
                    </tr>
                </table>
            </div>
            <!-- PDF -->
            <div class="pdfDescarga wow animate__animated animate__fadeInDown animate__delay-.8s">
                <a download="#" title="<?= $subtitulo?>">
                    <div class="img-pdf">
                        <div class="pdf"></div>
                        <p><?= $descarga ?></p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="galeria">
        <div class="titulo wow animate__animated animate__fadeInDown animate__delay-.8s">
            <h2><?= $galeria?></h2>
        </div>
        <div class="contenedor">
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal1.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal2.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal3.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal4.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal5.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal6.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal7.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
            <div class="caja-img">
                <img lazy="loading" src="assets/img/gal8.jpg" alt=""
                    class="galeria-img wow animate__animated animate__fadeInLeftBig animate__delay-.9s">
            </div>
        </div>
    </section>
    <section id="contacto" class="formulario">
        <div class="titulo wow animate__animated animate__fadeInDown animate__delay-.8s">
            <h2><?= $titulo_contacto?></h2>
            <p><?= $sub_contacto?></p>
        </div>
        <div class="alertas">
            <div id="error" class="error">
                <i class="fas fa-exclamation-circle"></i>
                <p id="txtError"></p>
            </div>
        </div>
        <div class="datos">
            <div class="form">
                <form action="./assets/includes/email.php" method="POST" onsubmit="return validar();">
                    <input type="text" autocomplete="off" name="nombre" id="nombre" placeholder="<?= $nombre?>">
                    <input type="text" autocomplete="off" name="apellido" id="apellido" placeholder="<?= $apellido?>">
                    <input type="email" autocomplete="off" name="email" id="email" placeholder="<?= $email?>">
                    <input type="text" autocomplete="off" name="asunto" id="asunto" placeholder="<?= $asunto?>">
                    <input type="text" autocomplete="off" name="mensaje" id="mensaje" placeholder="<?= $mensaje?>">
                    <button type="submit"><?= $btn_contacto ?></button>
                </form>
            </div>
            <div class="textos wow animate__animated animate__fadeInDown animate__delay-.8s">
                <div class="tel" title="Teléfono">
                    <a href="tel:8711458712">
                        <div class="imgTel "></div>
                        <p>87 11 45 87 12</p>
                    </a>
                </div>
                <div class="email" title="Correo">
                    <a href="mailto:info@contacto.mx ">
                        <div class="imgEmail "></div>
                        <p>info@contacto.com</p>
                    </a>
                </div>
                <div class=" ubicacion ">
                    <a href="#" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <footer class="footer ">
        <h2><?= $footerH2 ?> <a href="https://awsoftware.mx/ "><span><?= $footerSpan ?></span></a> </h2>
    </footer>
    <!--Script personales -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js "></script>
    <script src="./js/queryWow.js "></script>
    <script src="./js/wow.js "></script>
</body>

</html>