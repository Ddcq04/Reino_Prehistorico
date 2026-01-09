<?php 
    session_start();
    require_once "../../app/config.php";
    $modelo = AccesoDatos::getModelo();
    if(strip_tags($_GET["tipo"])) {
        $tipo = $_GET["tipo"];
        $dinosaurios = $modelo->getDinosaurios($tipo, "Mesozoico");
    }
    switch($tipo){
        case "Terrestre":
            $tipo = "terrestres";
            break;
        case "Acuatico":
            $tipo = "acuaticos";
            break;
        case "Volador":
            $tipo = "voladores";
            break;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurios <?= $tipo ?></title>
    <link rel="stylesheet" href="../../web/css/tipos_dinosaurios.css">
</head>
<body>
    <video autoplay muted loop id="videoFondo"> 
        <source src="../../web/videos/fondo-<?= $tipo ?>.mp4" type="video/mp4">
    </video>
    
    <header class="cabecera cabecera-<?= $tipo ?>">DINOSAURIOS <?= strtoupper($tipo) ?></header>

    <!-- Menu de navegacion-->
    <section class="menu">
        <nav class="navegacion-<?= $tipo ?>">
            <ul>
                <li><a href="../home.php">Inicio</a></li>
                <li><a href="../etapaMesozoico.html">Era Antigua</a></li>
                <li><a href="dinosaurios.html">Dinosaurios</a></li>
                <li><a href="../etapaCenozoico.html">Era Glaciar</a></li>
                <li><a href="../mamiferos.html">Mamíferos</a></li>
            </ul>
        </nav>
    </section>

    <!-- Contenedor de dinosaurios-->
    <section class="contenedor">
        <?php foreach($dinosaurios as $dinosaurio): ?>
            <div class="dino-tarjeta">
                <a href="info_dino.php?id=<?= $dinosaurio->id ?>">
                <div class="dino-imagen">
                    <img src="../../web/img/<?= $dinosaurio->id ?>.jpg">
                </div>
                </a>
                <!--Nombre y votos del dinosaurio-->
                <div class= "nombre-contenedor nombre-<?= $tipo ?>">
                    <h3><?= $dinosaurio->nombre ?></h3>
                    <!--Se muestra si el usuario se a logeado -->
                    <?php if(isset($_SESSION["usuario"])): ?>
                        <form method="POST" action="../../index.php">
                            <input type="hidden" name="id_dino" value="<?= $dinosaurio->id ?>">
                            <button type="submit" class="corazon" name="accion" value="votar">
                                <i>❤</i>
                                <span><?= $dinosaurio->total_votos ?></span>
                            </button>
                        </form>
                    <?php endif?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>