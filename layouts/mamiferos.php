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

     <section class="menu">
        <nav>
          <ul>
          <li><a href="home.php">Inicio</a></li>
            <li><a href="../layouts/Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
            <li><a href="etapaMesozoico.php">Era Mesozoica</a></li>
            <li><a href="etapaCenozoico.php">Era Glaciar</a></li>
            <li><a href="extincion.php">Extincion</a></li>
          </ul>
        </nav>
    </section>



  </header>

  <video autoplay muted loop id="video-fondo">
    <source src="../web/videos/hielo.mp4" type="video/mp4">
  </video>

     

  <main>

    <section>
      <h2>Animales Voladores</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_voladores as $dino): ?>
          <div class="tarjeta-animal">
            <a href="info_mamiferos.php?id=<?= $dino->id ?>">
              <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            </a>
            <div class="titulo-y-voto">
              <h3><?= $dino->nombre ?></h3>
              <?php if (isset($_SESSION["usuario"])): ?>
                <form method="POST" action="../index.php" class="">
                  <input type="hidden" name="id_dino" value="<?= $dino->id ?>">
                  <input type="hidden" name="url" value="layouts/mamiferos.php">
                  <button type="submit" class="corazon" name="accion" value="votar">
                    <i>🧊</i>
                    <span><?= $dino->total_votos ?></span>
                  </button>
                </form>
              <?php endif ?>
            </div>
          </div>
        <?php endforeach; ?> 
      </div>
    </section>

    
    <section>
      <h2>Animales Terrestres</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_terrestres as $dino): ?>
          <div class="tarjeta-animal">
            <a href="info_mamiferos.php?id=<?= $dino->id ?>">
              <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            </a>
            <div class="titulo-y-voto">
              <h3><?= $dino->nombre ?></h3>
              <?php if (isset($_SESSION["usuario"])): ?>
                <form method="POST" action="../index.php" class="">
                  <input type="hidden" name="id_dino" value="<?= $dino->id ?>">
                  <input type="hidden" name="url" value="layouts/mamiferos.php">
                  <button type="submit" class="corazon" name="accion" value="votar">
                    <i>🧊</i>
                    <span><?= $dino->total_votos ?></span>
                  </button>
                </form>
              <?php endif ?>
            </div>
          </div>
        <?php endforeach; ?> 
      </div>
    </section>

    
    <section>
      <h2>Animales Acuáticos</h2>
      <div class="contenedor-animales">
        <?php foreach($dinosaurios_acuaticos as $dino): ?>
          <div class="tarjeta-animal">
            <a href="info_mamiferos.php?id=<?= $dino->id ?>">
              <img src="../web/img/Mamiferos/<?= $dino->id ?>.jpg" alt="IMG">
            </a>
            <div class="titulo-y-voto">
              <h3><?= $dino->nombre ?></h3>
              <?php if (isset($_SESSION["usuario"])): ?>
                <form method="POST" action="../index.php" class="">
                  <input type="hidden" name="id_dino" value="<?= $dino->id ?>">
                  <input type="hidden" name="url" value="layouts/mamiferos.php">
                  <button type="submit" class="corazon" name="accion" value="votar">
                    <i>🧊</i>
                    <span><?= $dino->total_votos ?></span>
                  </button>
                </form>
              <?php endif ?>
            </div>
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