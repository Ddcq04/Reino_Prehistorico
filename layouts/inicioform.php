<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../web/css/inicio.css">
    <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">

</head>

<body>
    <div class="contenedorP">
        <div class="seccionvideo">
            <div class="contenedor-videos">
                <video autoplay muted loop playsinline class="video-dino" id="vid1">
                    <source src="../web/videos/videologin/vid2.mp4" type="video/mp4">
                </video>

                <video autoplay muted loop playsinline class="video-dino" id="vid2">
                    <source src="../web/videos/videologin/vid4.mp4" type="video/mp4">
                </video>
            </div>

        </div>

        <div class="seccionlogin">
            <div class="logo">
                <img src="../web/img/home/logo1.png" alt="">
                <h1>Reino Prehistórico</h1>
                <img src="../web/img/home/logo2.png" alt="">
            </div>

            <form method="post" action="../index.php">

                <?php
                $msg = "";
                if (isset($_GET['error'])) {
                    $msg = htmlspecialchars($_GET['error']);
                }

                if (!empty($msg)) {
                    echo "<p style='color:red; text-align:center;'>$msg</p>";
                }
                ?>
                <label for="">Usuario</label>
                <input type="text" name="nombre" id="nombre"><br>
                <label for="">Contraseña</label>
                <input type="password" name="clave" id="clave">
                <br>
                <input type="submit" name="accion" value="entrar"><br>
                
                <a href="registroform.php" class="btnreg">Registrarse</a>
                
                <input type="submit" name="accion" value="invitado"><br>

            </form>

        </div>

    </div>
</body>

</html>