<?php  
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
        <nav>
            <ul>
                <li><a href="../etapaMesozoico.html">Era Antigua</a></li>
                <li><a href="dinosaurios.html">Dinosaurios</a></li>
                <li><a href="../etapaCenozoico.html">Era Glaciar</a></li>
                <li><a href="../mamiferos.html">Mamíferos</a></li>
            </ul>
        </nav>
    </section>

    <!-- Contenedor de dinosaurios voladores-->
    <section class="contenedor">
        <?php foreach($dinosaurios as $dinosaurio): ?>
            <a href="info_dino.php?id=<?= $dinosaurio->id ?>">
                <div class="dino-tarjeta"> 
                    <div class="dino-imagen">
                        <img src="../../web/img/<?= $dinosaurio->id ?>.jpg">
                    </div>
                    <h3 class= "nombre nombre-<?=  $tipo ?>"><?= $dinosaurio->nombre ?></h3>
                </div>
            </a>
        <?php endforeach; ?>
    </section>
</body>
</html>