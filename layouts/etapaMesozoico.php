<?php

require_once __DIR__ . '/../app/tiempo.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Línea de Tiempo - Eras Geológicas</title>
  <link rel="stylesheet" href="../web/css/etapa.css">
  <link rel="stylesheet" href="../web/css/etapasquery.css">
  <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">

</head>

<body id="eraMesozoico">


  <div class="video-background">
    <video autoplay muted loop id="bg-video">
      <source src="../web/videos/etapa-video.mp4" type="video/mp4">
      Tu navegador no soporta videos HTML5.
    </video>
  </div>

  <header>

    <!--<span style="  font-family: 'JurassicPark', sans-serif;
;" >*</span>-->


    <!-- LOGO----------------------------------------------- -->
    <div class="logo">
      <img src="../web/img/home/logo1.png" alt="">
      <h1>Reino Prehistórico</h1>
      <img src="../web/img/home/logo2.png" alt="">
    </div>


    <input type="checkbox" id="menu-ancla" class="menu-ancla">
    <label for="menu-ancla" class="hamburguesa">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="menu-text">Menú</span>
    </label>

    <div class="overlay"></div>

    <nav>
      <ul class="nav-menu">
        <li><a href="home.php">Inicio</a></li>
        <li><a href="etapaMesozoico.php">Era Antigua</a></li>
        <li><a href="Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
        <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
        <li><a href="mamiferos.php">Mamíferos</a></li>
      </ul>
    </nav>



    <h2>Linea de Tiempo: Mesozoico</h2>

  </header>









  <section class="timeline">


      <div class="timeline-content">
        <h2 class="erah2">Era Mesozoica</h2>
        <p>También conocida como "la Era de los Dinosaurios". Fue un periodo de grandes cambios climáticos, evolución de
          reptiles, aparición de mamíferos tempranos y plantas con flores. Se divide en tres periodos principales:</p>
        <ul class="centroEtapas">
          <li><a href="../layouts/Etapas_Mezosoico/etapaTriasico.php">Triásico</a></li>
          <li><a href="../layouts/Etapas_Mezosoico/etapaJurasico.php">Jurásico</a></li>
          <li><a href="../layouts/Etapas_Mezosoico/etapaCretacico.php">Cretácico</a></li>
        </ul>
        <!-- <a href="#" class="btn">Ver más</a>-->
      </div>
    

    <div class="timeline-item">
     
      <div class="timeline-content">
        <h2 id="triasico">Triasico</h2>
        <p>252 – 201 millones de años atrás</p>
        <ul>
          <li>Aparecen los primeros dinosaurios.</li>
          <li>Clima caluroso y seco.</li>
          <li>Los continentes estaban unidos en Pangea.</li>
        </ul>


        <a href="../layouts/Etapas_Mezosoico/etapaTriasico.php" class="btn">Ver más</a>
      </div>
    </div>

    <div class="timeline-item">
    
      <div class="timeline-content">
     
        <h2 id="jurasico">Jurasico</h2>
        <p>201 – 145 millones de años atrás</p>
        <ul>
          <li>Los dinosaurios dominan la Tierra.</li>
          <li>Surgen las primeras aves.</li>
          <li>Pangea comienza a separarse.</li>
        </ul>
        <a href="../layouts/Etapas_Mezosoico/etapaJurasico.php" class="btn">Ver más</a>
      </div>
    </div>

    <div class="timeline-item">
      
      
      <div class="timeline-content">
      
        <h2 id="cretacico">Cretacico</h2>
        <p>145 – 66 millones de años atrás</p>
        <ul>
          <li>Aparecen las primeras plantas con flores.</li>
          <li>Gran diversidad de dinosaurios.</li>
          <li>Termina con la extinción masiva por un meteorito.</li>
        </ul>
        <a href="../layouts/Etapas_Mezosoico/etapaCretacico.php" class="btn">Ver más</a>
      </div>
    </div>


    <div class="timeline-item center-item btn-eras">

      <a href="../layouts/etapaCenozoico.php" class="btn">Era Cenozoica o Era del Hielo</a>
    </div>
    </div>

  </section>

</body>

</html>