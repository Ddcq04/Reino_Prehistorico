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
      <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">

</head>

<body id="eraHielo">

  <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="../web/videos/etapa-video.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

      <header>
  

<div class="logo">
      <img src="../web/img/home/logo1.png" alt="">
      <h1>Reino Prehistórico</h1>
      <img src="../web/img/home/logo2.png" alt="">
    </div>

    <nav>
        <ul>
          <li><a href="etapaMesozoico.php">Era Antigua</a></li>
          <li><a href="Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
          <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
          <li><a href="mamiferos.php">Mamíferos</a></li>
        </ul>
    </nav>


    
    <h2>Línea de Tiempo: Cenozoico (Era del Hielo)</h2>
    
</header>





  <section class="timeline">
<div class="timeline-item center-item">
    <div class="timeline-content Cenozoico">
        <h2>Era Cenozoica o Era de Hielo</h2>
        <p>66 millones de años atrás – Actualidad</p>
        <p>También conocida como "la Era de los Dinosaurios". Fue un periodo de grandes cambios climáticos, evolución de reptiles, aparición de mamíferos tempranos y plantas con flores. Se divide en tres periodos principales:</p>
        <ul>
            <li><a href="Era_Glaciar/etapaPaleogeno.php">Paleógeno</a></li>
            <li><a href="Era_Glaciar/etapaNeogeno.php">Neógeno</a></li>
            <li><a href="Era_Glaciar/etapaCuaternaria.php">Cuaternario</a></li>
        </ul>
        
    </div>
</div>

    <div class="timeline-item">
      <div class="timeline-content">
        <h2 id="paleogeno">Paleógeno</h2>
        <p>66 – 23 millones de años atrás</p>
        <ul>
          <li>Rápida expansión de los mamíferos.</li>
          <li>Surgen los primeros primates.</li>
          <li>El clima era cálido, aunque comenzó a enfriarse al final.</li>
        </ul>


        <a href="Era_Glaciar/etapaPaleogeno.php" class="btn">Ver más</a>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        <h2 id="neogeno">Neógeno</h2>
        <p>23 – 2.6 millones de años atrás</p>
        <ul>
  <li>Evolución de animales modernos: caballos, felinos, elefantes.</li>
  <li>Se forman grandes praderas.</li>
  <li>Aparecen los primeros homínidos (antepasados del ser humano).</li>
</ul>
        <a href="Era_Glaciar/etapaNeogeno.php" class="btn">Ver más</a>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        
        <h2 id="cuaternario">Cuaternario</h2>
        <p>2.6 millones de años atrás – Actualidad</p>
        <ul>
  <li>Repetidas eras glaciales (Edad de Hielo).</li>
  <li>Evolución del Homo sapiens.</li>
  <li>Desarrollo de civilizaciones humanas.</li>
</ul>
        <a href="Era_Glaciar/etapaCuaternaria.php" class="btn">Ver más</a>
      </div>
    </div>

<div class="timeline-item center-item btn-eras">
  
        <a href="../layouts/etapaMesozoico.php" class="btn">Volver a Era Mesozoica</a>
    </div>

  </section>

</body>

</html>