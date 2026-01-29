<?php


require_once __DIR__ . '/../app/tiempo.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Extinción</title>
    <link rel="stylesheet" href="../web/css/extincion.css">
</head>

<body>

    <header>
          <!-- LOGO----------------------------------------------- -->
        <div class="logo">
            <img src="../web/img/home/logo1.png" alt="">
            <h1>Reino Prehistórico</h1>
            <img src="../web/img/home/logo2.png" alt="">
        </div>
        
        <h1>La Extinción</h1>
        <p>Todas las teorías sobre la desaparición de los dinosaurios</p>
    </header>

    <nav>
            <input type="checkbox" id="check">

            <label for="check" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </label>

           <ul class="enlaces">
            <li><a href="home.php">Inicio</a></li>
            <li><a href="Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
            <li><a href="etapaMesozoico.php">Era Mesozoica</a></li>
            <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
            <li><a href="mamiferos.php">Mamiferos</a></li>
          </ul>
        </nav>

        <video autoplay muted loop id="video-fondo">
            <source src="../web/videos/fondo.mp4" type="video/mp4">
        </video>

    <main>

        <section class="teoria">
            <div class="teoria_img">
                <img src="../web/img/Extincion/meteo.jpg" alt="Impacto de un meteorito">
            </div>
            <div class="teoria_info">
                <h3>Impacto de un meteorito</h3>
                <p>
                    Una de las teorías más aceptadas sostiene que un gran asteroide impactó
                    en la península de Yucatán hace unos 65 millones de años, provocando
                    cambios climáticos extremos y la extinción masiva.
                </p>
            </div>
        </section>

        <section class="teoria">
            <div class="teoria_img">
                <img src="../web/img/Extincion/clima.jpg" alt="Cambios climáticos">
            </div>
            <div class="teoria_info">
                <h3>Cambios climáticos</h3>
                <p>
                    Alteraciones drásticas del clima, como descensos de temperatura
                    y cambios en los ecosistemas, pudieron dificultar la supervivencia
                    de muchas especies.
                </p>
            </div>
        </section>

        <section class="teoria">
            <div class="teoria_img">
                <img src="../web/img/Extincion/erupcion.jpg" alt="Erupciones volcánicas">
            </div>
            <div class="teoria_info">
                <h3>Erupciones volcánicas</h3>
                <p>
                    Las grandes erupciones volcánicas liberaron enormes cantidades
                    de gases y cenizas, afectando la atmósfera y provocando
                    un enfriamiento global.
                </p>
            </div>
        </section>

        <section class="teoria">
            <div class="teoria_img">
                <img src="../web/img/Extincion/virus.jpg" alt="Enfermedades">
            </div>
            <div class="teoria_info">
                <h3>Enfermedades</h3>
                <p>
                    La aparición de nuevas enfermedades pudo afectar gravemente
                    a las poblaciones de dinosaurios, debilitando su capacidad
                    de adaptación.
                </p>
            </div>
        </section>

        <section class="teoria">
            <div class="teoria_img">
                <img src="../web/img/Extincion/huevos.jpg" alt="Problemas en la reproducción">
            </div>
            <div class="teoria_info">
                <h3>Problemas en la reproducción</h3>
                <p>
                    Cambios ambientales pudieron afectar la incubación de los huevos,
                    reduciendo la tasa de reproducción y llevando a la extinción.
                </p>
            </div>
        </section>

    </main>

</body>
</html>
