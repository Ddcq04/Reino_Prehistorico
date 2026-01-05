<?php  
    require_once "../../app/config.php";
    $modelo = AccesoDatos::getModelo();
    $dinosaurios_terrestres = $modelo->getDinosaurios("Terrestre", "Mesozoico");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="../../web/css/terrestres.css" type="text/css">
    <title>Dinosaurios Terrestres</title>
</head>
<body>
    <video autoplay muted loop id="videoFondo">
        <source src="../../web/videos/fondo-terrestres.mp4" type="video/mp4">
    </video>

    <header>DINOSAURIOS TERRESTRES</header> 
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
        
    <!-- Contenedor de dinosaurios terrestres-->
    <section class="contenedor-terrestres">
        <?php foreach($dinosaurios_terrestres as $dinosaurio): ?>
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

        
        <!-- Spinosaurus -->
        <div class="dino-tarjeta">
            <div class="dino-imagen">
                <img src="../../web/img/spinosaurus.jpg" alt="Spinosaurus">
            </div>
            <h3>Spinosaurus</h3>
            <div class="dino-info">
                <p><strong>Periodo:</strong> Cretácico</p>
                <p><strong>Era:</strong> Mesozoico</p>
                <p><strong>Tiempo de vida:</strong> Hace 112-93 millones de años</p>
                <p><strong>Ubicación:</strong> Norte de África</p>
                <p><strong>Alimentación:</strong> Carnívoro/Piscívoro</p>
                <p><strong>Agresividad:</strong> Muy alta</p>
                <p><strong>Familia:</strong> Spinosauridae</p>
                <p><strong>Especie:</strong> Spinosaurus aegyptiacus</p>
            </div>
        </div>
    </section>
</body>
</html>