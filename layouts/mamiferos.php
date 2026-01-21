<?php  
  require_once "../app/config.php";
  require_once __DIR__ . '/../app/tiempo.php';
  $modelo = AccesoDatos::getModelo();
  $dinosaurios_voladores = $modelo->getDinosaurios("Volador", "Cenozoico");
  $dinosaurios_terrestres = $modelo->getDinosaurios("Terrestre", "Cenozoico");
  $dinosaurios_acuaticos = $modelo->getDinosaurios("Acuatico", "Cenozoico");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animales de la Edad del Hielo</title>
  <link rel="stylesheet" href="../web/css/mamiferos.css">
      <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">

</head>
<body>

  <header>

    <div class="logo">
      <img src="../web/img/home/logo1.png" alt="">
      <h1>Reino Prehistórico</h1>
      <img src="../web/img/home/logo2.png" alt="">
    </div>

    <h1>Animales de la Edad del Hielo</h1>
    <p>Descubre las especies voladoras, terrestres y acuáticas del Pleistoceno</p>
  </header>

  <video autoplay muted loop id="video-fondo">
    <source src="../web/videos/hielo.mp4" type="video/mp4">
  </video>

      <section class="menu">
        <nav>
          <ul>
          <li><a href="home.php">Inicio</a></li>
            <li><a href="../layouts/Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
            <li><a href="etapaMesozoico.php">Era Mesozoica</a></li>
            <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
          </ul>
        </nav>
    </section>

  <main>

    <section>
      <h2>Animales Voladores</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_voladores as $dino): ?>
          <div class="tarjeta-animal">
            <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            <h3><?= $dino->nombre ?></h3>
            <p><strong>Periodo:</strong> <?= $dino->nombre_periodo ?></p>
            <p><strong>Era:</strong> <?= $dino->nombre_era ?></p>
            <p><strong>Familia:</strong> <?= $dino->familia ?></p>
            <p><strong>Hábitat:</strong> <?= $dino->ubicacion ?></p>
            <p><strong>Alimentación:</strong> <?= $dino->alimentacion ?></p>
            <p><strong>Agresividad:</strong> <?= $dino->agresividad ?></p>
            <p><strong>Tiempo de vida:</strong> <?= $dino->tiempo_vida ?></p>
            <p><strong>Especie:</strong> <?= $dino->especie ?></p>
            <p> <?= $dino->total_votos ?>
          </div>
        <?php endforeach; ?> 
      </div>
    </section>

    
    <section>
      <h2>Animales Terrestres</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_terrestres as $dino): ?>
          <div class="tarjeta-animal">
            <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            <h3><?= $dino->nombre ?></h3>
            <p><strong>Periodo:</strong> <?= $dino->nombre_periodo ?></p>
            <p><strong>Era:</strong> <?= $dino->nombre_era ?></p>
            <p><strong>Familia:</strong> <?= $dino->familia ?></p>
            <p><strong>Hábitat:</strong> <?= $dino->ubicacion ?></p>
            <p><strong>Alimentación:</strong> <?= $dino->alimentacion ?></p>
            <p><strong>Agresividad:</strong> <?= $dino->agresividad ?></p>
            <p><strong>Tiempo de vida:</strong> <?= $dino->tiempo_vida ?></p>
            <p><strong>Especie:</strong> <?= $dino->especie ?></p>
          </div>
        <?php endforeach; ?> 
      </div>
    </section>

    
    <section>
      <h2>Animales Acuáticos</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_acuaticos as $dino): ?>
          <div class="tarjeta-animal">
            <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            <h3><?= $dino->nombre ?></h3>
            <p><strong>Periodo:</strong> <?= $dino->nombre_periodo ?></p>
            <p><strong>Era:</strong> <?= $dino->nombre_era ?></p>
            <p><strong>Familia:</strong> <?= $dino->familia ?></p>
            <p><strong>Hábitat:</strong> <?= $dino->ubicacion ?></p>
            <p><strong>Alimentación:</strong> <?= $dino->alimentacion ?></p>
            <p><strong>Agresividad:</strong> <?= $dino->agresividad ?></p>
            <p><strong>Tiempo de vida:</strong> <?= $dino->tiempo_vida ?></p>
            <p><strong>Especie:</strong> <?= $dino->especie ?></p>
          </div>
        <?php endforeach; ?> 
      </div>
    </section>

  </main>

  <footer>
    <p>© 2025 Animales de la Edad del Hielo</p>
  </footer>

</body>
</html>