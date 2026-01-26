<?php



require_once __DIR__ . '/../app/tiempo.php';

if (!isset($_SESSION['usuario']) && !isset($_SESSION['invitado'])) {
    header("Location: ../layouts/inicioform.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reino Prehistórico</title>


    <link rel="stylesheet" href="../web/css/index.css">
    <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../../web/css/menuHamburguesa.css">

</head>

<body>

    <!-- HEADER Y NAVEGADOR ---------------------------------------------------------------------------->
    <header>

        <!-- LOGO----------------------------------------------- -->
        <div class="logo">
            <img src="../web/img/home/logo1.png" alt="">
            <h1>Reino Prehistórico</h1>
            <img src="../web/img/home/logo2.png" alt="">
        </div>

        <!-- NAVEGACION----------------------------------------------- -->
        <nav>
            <input type="checkbox" id="check">

            <label for="check" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <ul class="enlaces">
                <li><a href="etapaMesozoico.php">Era Antigua</a></li>
                <li><a href="../layouts/Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
                <li><a href="../layouts/etapaCenozoico.php">Era Glaciar</a></li>
                <li><a href="../layouts/mamiferos.php">Mamíferos</a></li>
                <li><a href="../layouts/">Extinción</a></li>

            </ul>
        </nav>

        <!-- USUARIO--------------------------------------------------- -->
        <div class="usuario">
            <!-- Boton para cerrar sesion -->
            <p><?= isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Invitado" ?>
            <p>
                <a href="../layouts/inicioform.php">
                    <img src="../web/img/home/logousua.png" alt="Perfil de Usuario">
                </a>

            <form action="../index.php" method="post">
                <button  id="sesion" type="submit" name="accion" value="cerrar_sesion">Cerrar sesión</button>
            </form>

        </div>

    </header>

    <!-- SLIDER------------------------------------------------------------------------------>

    <div class="slidbox">


        <ul>
            <li>
                <img src="../web/img/home/home1.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>Bienvenidos al mundo Prehistórico</h2>
                        <h3>Conoce a los gigantes que dominaron la Tierra</h3>
                    </div>

                </div>

            </li>

            <li>
                <img src="../web/img/home/home3.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>Acompañanos en este viaje</h2>
                        <h3> Aprende sobre sus especies, hábitats y curiosidades fascinantes.</h3>
                    </div>

                    <div class="boton">
                        <a href="../layouts/Dinosaurios/dinosaurios.php">Dinosaurios</a>

                    </div>


                </div>



            </li>


            <li>

                <img src="../web/img/home/home2.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>¿Crees que solo eran terrestres?
                        </h2>
                    </div>

                    <div class="boton">
                        <a href="../layouts/Dinosaurios/tipos_dinosaurios.php?tipo=Acuatico">Descubrelo</a>
                    </div>

                </div>


            </li>

            <li>
                <img src="../web/img/home/home6.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>Los dinosaurios no fueron los únicos depredadores </h2>
                        <h3>El final de una era marcó el comienzo de otra</h3>
                    </div>

                </div>

            </li>

            <li>
                <img src="../web/img/home/home8.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>Explora distintas épocas</h2>
                        <h3></h3>
                    </div>

                    <div class="boton">
                        <a href="../layouts/etapaMesozoico.php">Etapa préhistorica</a>

                        <a href="../layouts/etapaCenozoico.php">Etapa glaciar</a>
                    </div>
                </div>

            </li>

            <li>
                <img src="../web/img/home/home9.jpg" alt="">
                <div class="contentxtbot">
                    <div class="txt">
                        <h2>Los mamíferos también dejaron su huella</h2>
                        <h3>Especias igual de imponentes como los dinosaurios</h3>
                    </div>
                    <div class="boton">
                        <a href="../layouts/mamiferos.php">Mamíferos</a>
                    </div>

                </div>

            </li>


        </ul>

    </div>


    <!-- FOOTER -------------------------------------------------------------------->
    <footer class="footer">
        <div class="seccion1">

            <div class="content">
                <h2>Autores</h2>
                <ul>
                    <li>Erik Chuto</li>
                    <li>Diego Chauca</li>
                    <li>Davis Rua</li>
                    <li>Alejandro Fernández</li>
                </ul>
            </div>

            <div class="content">
                <h2>Últimas noticias</h2>
                <ul>
                    <li><a href="https://www.elconfidencial.com/espana/madrid/2026-01-23/mercadillo-gratis-minerales-madrid-1tna-1qrt_4289734/">Museos retira sus fosiles</a></li>
                    <li><a href="https://www.cronista.com/colombia/actualidad-co/el-descubrimiento-que-cambia-la-arqueologia-hallan-un-fosil-inedito-de-dinosaurio-que-obliga-a-reescribir-la-historia/">Nuevos fosiles</a></li>
                    <li><a href="https://www.nationalgeographic.com.es/ciencia/asteroide-o-actividad-volcanica-teorias-extincion-dinosaurios_18850">Teorias de extinción</a></li>
                    <li><a href="https://www.educaciontrespuntocero.com/recursos/ted-sobre-dinosaurios/">Conferencias</a></li>
                </ul>
            </div>

            <div class="content">
                <h2>Enlaces de interés</h2>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <div class="content">
                <h2>Suscríbete</h2>
                <ul class="redesociales">

                    <li><a href="https://www.facebook.com/?locale=es_ES"><img src="../web/img/home/face.png"
                                alt="Facebook"></a>
                    </li>

                    <li><a href="https://www.instagram.com/"><img src="../web/img/home/insta.png" alt="Instagram"></a>
                    </li>

                    <li><a href="https://x.com/?lang=es"><img src="../web/img/home/x.png" alt="Twitter/X"></a></li>

                    <li><a href="https://discord.com/login"><img src="../web/img/home/disc.png" alt="Discord"></a></li>
                </ul>
            </div>

        </div>



        </div>

        <div class="seccion2">
            <ul>
                <li><a href="#">Aviso legal</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
            <p>© 2025 | Trabajo grupal de Desarrollo de Interfaces</p>
        </div>
    </footer>
</body>

</html>