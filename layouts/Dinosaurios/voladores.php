<?php  
    require_once "../../app/config.php";
    $modelo = AccesoDatos::getModelo();
    $dinosaurios_voladores = $modelo->getDinosaurios("Volador", "Mesozoico");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurios Voladores</title>
    <link rel="stylesheet" href="../../web/css/voladores.css">
</head>
<body>
    <video autoplay muted loop id="videoFondo">
        <source src="../../web/videos/fondo-voladores.mp4" type="video/mp4">
    </video>
    
    <header>DINOSAURIOS VOLADORES</header>

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
    <section class="contenedor-voladores">
        <?php foreach($dinosaurios_voladores as $dinosaurio): ?>
            <div class="dino-tarjeta"> 
                <div class="dino-imagen">
                    <img src="../../web/img/<?= $dinosaurio->id ?>.jpg">
                </div>
                <h3><?= $dinosaurio->nombre ?></h3>
                <div class="dino-info">
                    <?= $dinosaurio->nombre_era ?>
                </div>
            </div>
        <?php endforeach; ?>
        
        <!-- Hatzegopteryx -->
        <div class="dino-tarjeta">
            <div class="dino-imagen">
                <img src="../../web/img/hatzegopteryx.jpg" alt="Hatzegopteryx">
            </div>
            <h3>Hatzegopteryx</h3>
            <div class="dino-info">
                <p><strong>Periodo:</strong> Cretácico Superior</p>
                <p><strong>Era:</strong> Mesozoico</p>
                <p><strong>Tiempo de vida:</strong> Hace 66 millones de años</p>
                <p><strong>Ubicación:</strong> Europa (Rumanía)</p>
                <p><strong>Alimentación:</strong> Carnívoro</p>
                <p><strong>Agresividad:</strong> Alta</p>
                <p><strong>Familia:</strong> Azhdarchidae</p>
                <p><strong>Especie:</strong> Hatzegopteryx thambema</p>
            </div>
        </div>
    </section>
</body>
</html>