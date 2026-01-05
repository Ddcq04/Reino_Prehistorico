<?php  
    require_once "../../app/config.php";
    $modelo = AccesoDatos::getModelo();
    $dinosaurios_acuaticos = $modelo->getDinosaurios("Acuatico", "Mesozoico");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurios Acuáticos</title>
    <link rel="stylesheet" href="../../web/css/acuaticos.css">
</head>
<body>
    <video autoplay muted loop id="videoFondo">
        <source src="../../web/videos/fondo-acuaticos2.mp4" type="video/mp4">
    </video>
    
    <header>DINOSAURIOS ACUÁTICOS</header>

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

    <!-- Contenedor de dinosaurios marinos-->
    <section class="contenedor-acuaticos">
        <?php foreach($dinosaurios_acuaticos as $dinosaurio): ?>
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

        <!-- Archelon -->
        <div class="dino-tarjeta">
            <div class="dino-imagen">
                <img src="../../web/img/archelon.jpg" alt="Archelon">
            </div>
            <h3>Archelon</h3>
            <div class="dino-info">
                <p><strong>Periodo:</strong> Cretácico Superior</p>
                <p><strong>Era:</strong> Mesozoico</p>
                <p><strong>Tiempo de vida:</strong> Hace 80-74 millones de años</p>
                <p><strong>Ubicación:</strong> Norteamérica</p>
                <p><strong>Alimentación:</strong> Omnívoro</p>
                <p><strong>Agresividad:</strong> Baja</p>
                <p><strong>Familia:</strong> Protostegidae</p>
                <p><strong>Especie:</strong> Archelon ischyros</p>
            </div>
        </div>
    </section>
</body>
</html>