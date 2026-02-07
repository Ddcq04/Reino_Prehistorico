<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/etapa.css">
    <link rel="icon" href="../../web/img/home/favicon.png" type="image/x-icon">
    <title>Neógeno - Era Cenozoica</title>
</head>

<body id="eraHielo">

    <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="../../web/videos/videologin/vid8.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <div class="image-background neogeno-bg">
  </div>

    <input type="checkbox" id="menu-toggle" hidden>

    <header class="menu-mezo">
        <label for="menu-toggle" class="hamburguesa">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="menu-text">Menú</span>
        </label>

        <div class="logo">
            <img src="../../web/img/home/logo1.png" alt="Logo 1">
            <div class="logo-center">
                <h1>NEOGENO</h1>
            </div>
            <img src="../../web/img/home/logo2.png" alt="Logo 2">
        </div>

        <label for="menu-toggle" class="overlay"></label>

        <nav class="nav-desktop">
            <ul class="nav-menu">
                <li><a href="../home.php">Inicio</a></li>
                <li><a href="../etapaMesozoico.php">Era Antigua</a></li>
                <li><a href="../Dinosaurios/dinosaurios.php">Dinosaurios</a></li>
                <li><a href="../etapaCenozoico.php">Era Glaciar</a></li>
                <li><a href="../mamiferos.php">Mamíferos</a></li>
                            <li><a href="../extincion.php">Extinción</a></li>

            </ul>
        </nav>
    </header>

    <!-- FALTA: Añadir subtítulo como en las otras páginas -->
    <p class="subtitu">La Era de los Mamíferos Modernos y el Enfriamiento Global</p>

    <main class="contenido">
        <section class="vidrio">
            <h2>Duración</h2>
            <p>
                El Neógeno se extendió desde hace <strong>23 hasta 2.58 millones de años</strong>,
                siendo el segundo periodo de la Era Cenozoica. Este período presenció la 
                diversificación de los mamíferos modernos y el enfriamiento global que 
                condujo a las edades de hielo del Cuaternario.
            </p>
        </section>

        <section class="vidrio">
            <h2>Divisiones del Neógeno</h2>
            <p>El Neógeno se divide en dos épocas principales:</p>
            <ul>
                <li>Mioceno (23 - 5.3 Ma)</li>
                <li>Plioceno (5.3 - 2.58 Ma)</li>
            </ul>
        </section>

        <section class="vidrio">
            <h2>Clima y Cambios Globales</h2>
            <p>
                El Neógeno se caracterizó por un <strong>enfriamiento gradual</strong> y 
                la formación de los casquetes polares. Durante el Mioceno, los pastizales 
                se expandieron globalmente, y en el Plioceno el clima se volvió más seco y 
                estacional, preparando el escenario para las glaciaciones.
            </p>
        </section>

        <section class="vidrio">
            <h2>Evolución de los Mamíferos</h2>
            <p>
                Los mamíferos continuaron su radiación adaptativa, apareciendo muchas 
                familias modernas:
            </p>
            <ul>
                <li><strong>Grandes herbívoros</strong> como mastodontes y rinocerontes</li>
                <li><strong>Primeros homínidos</strong> (Australopithecus)</li>
                <li>Diversificación de los felinos, cánidos y mustélidos</li>
                <li>Ballenas y delfines modernos</li>
                <li>Aparecen los primeros caballos de un solo dedo (Equus)</li>
            </ul>
        </section>

        <section class="vidrio">
            <h2>Flora y Expansión de los Pastizales</h2>
            <p>
                La vegetación se adaptó al clima más seco y estacional:
            </p>
            <ul>
                <li>Expansión global de las praderas y sabanas</li>
                <li>Disminución de los bosques tropicales</li>
                <li>Desarrollo de plantas adaptadas a la sequía</li>
                <li>Primeras plantas C4 (más eficientes en condiciones de CO2 bajo)</li>
            </ul>
        </section>

        <section class="vidrio">
            <h2>Fauna Característica</h2>
            <p>El Neógeno vio la aparición de muchos animales icónicos:</p>
            <ul>
                <li><strong>Megalodon</strong> - El tiburón más grande que ha existido</li>
                <li><strong>Smilodon</strong> (dientes de sable) - Aunque apareció en el Plioceno tardío</li>
                <li>Terror birds (aves del terror) en América del Sur</li>
                <li>Grandes marsupiales en Australia</li>
                <li>Primeros elefantes modernos</li>
            </ul>
        </section>

        <section class="vidrio">
            <h2>Eventos Geológicos Importantes</h2>
            <ul>
                <li>Formación del istmo de Panamá (unión de las Américas)</li>
                <li>Elevación de los Alpes, Himalaya y Montañas Rocosas</li>
                <li>Aislamiento de la Antártida y formación de la capa de hielo permanente</li>
                <li>Cambios en las corrientes oceánicas que afectaron el clima global</li>
            </ul>
        </section>

        <section class="vidrio">
            <h2>Importancia del Neógeno</h2>
            <p>
                El Neógeno sentó las bases para el mundo moderno. La geografía se volvió 
                más parecida a la actual, los ecosistemas de pastizales permitieron la 
                evolución de herbívoros rápidos y sus depredadores, y aparecieron los 
                primeros antepasados humanos. Este período representa la transición 
                hacia las condiciones que eventualmente llevarían a la era de hielo 
                del Cuaternario.
            </p>
        </section>

        <nav class="navegacion">
            <a href="../Era_Glaciar/etapaPaleogeno.php">←Anterior: Paleógeno</a>
            <a href="../../layouts/etapaCenozoico.php">LT: Etapa Mesozoico</a>
                  <a href="#">Volver Arriba</a>

            <a href="../Era_Glaciar/etapaCuaternaria.php">Siguiente: Cuaternario →</a>
        </nav>
    </main>

</body>
</html>