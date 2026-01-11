<?php

require_once __DIR__ . '/../../app/tiempo.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos_Dinosaurios</title>
    <link rel="StyleSheet" href="../../web/css/dinosaurios.css">
</head>
<body>
    <div class ="contenedor-tipos">
        <!--Seccion terrestres-->
        <section class="terrestres">
            <video loop autoplay muted id="videoFondo">
                <source src="../../web/videos/fondo-terrestres.mp4">
            </video>
            <a href="tipos_dinosaurios.php?tipo=Terrestre">Terrestres</a>
        </section>

        <!--Seccion acuaticos-->
        <section class="acuaticos">
            <video loop autoplay muted id="videoFondo">
                <source src="../../web/videos/fondo-acuaticos2.mp4">
            </video>
            <a href="tipos_dinosaurios.php?tipo=Acuatico">Acuaticos</a>
        </section>
        
        <!--Seccion voladores-->
        <section class="voladores">
            <video loop autoplay muted id="videoFondo">
                <source src="../../web/videos/fondo-voladores.mp4">
            </video>
            <a href="tipos_dinosaurios.php?tipo=Volador">Voladores</a>
        </section>

    </div>
</body>
</html>