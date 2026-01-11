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
</head>

<body id="eraMesozoico">


  <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="../Era_Glaciar/video.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>
  <header>
    
       <!--<span style="  font-family: 'JurassicPark', sans-serif;
;" >*</span>-->


      <h1 class="reini">Reino Prehistorico</h1>

    <nav>
        <ul>            
          <li><a href="etapaMesozoico.php">Era Antigua</a></li>
          <li><a href="Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
          <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
          <li><a href="mamiferos.php">Mamíferos</a></li>
        </ul>
    </nav>


    
    <h2>Línea de Tiempo: Mesozoico</h2>
    
</header>

 

   





  <section class="timeline">

  
<div class="timeline-item center-item">
    <div class="timeline-content">
        <h2>Era Mesozoica</h2>
        <p>También conocida como "la Era de los Dinosaurios". Fue un periodo de grandes cambios climáticos, evolución de reptiles, aparición de mamíferos tempranos y plantas con flores. Se divide en tres periodos principales:</p>
        <ul>
            <li><a href="../Etapas_Mezosoico/etapaTriasico.html">Triásico</a></li>
            <li><a href="../Etapas_Mezosoico/etapaJurasico.html">Jurásico</a></li>
            <li><a href="../Etapas_Mezosoico/etapaCretacico.html">Cretácico</a></li>
        </ul>
       <!-- <a href="#" class="btn">Ver más</a>-->
    </div>
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


        <a href="../Etapas_Mezosoico/etapaTriasico.html" class="btn">Ver más</a>
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
        <a href="../Etapas_Mezosoico/etapaJurasico.html" class="btn">Ver más</a>
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
        <a href="../Etapas_Mezosoico/etapaCretacico.html" class="btn">Ver más</a>
      </div>
    </div>


<div class="timeline-item center-item">
  
        <a href="../Era_Glaciar/etapaHielo.html" class="btn">Era Cenozoica o Era del Hielo</a>
    </div>
</div>

  </section>

</body>

</html>