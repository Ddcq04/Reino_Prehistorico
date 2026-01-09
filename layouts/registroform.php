<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../web/css/registro.css">
    <link rel="icon" href="../web/img/home/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="logo">
        <img src="../web/img/home/logo1.png" alt="">
        <h1>Reino Prehistórico</h1>
        <img src="../web/img/home/logo2.png" alt="">
    </div>

    <form method="post" action="../dat/registro.php">

        <?php
        $msg = "";
        if (isset($_GET['error'])) {
            $msg = htmlspecialchars($_GET['error']);
        }

        if (!empty($msg)) {
            echo "<p style='color:red; text-align:center;'>$msg</p>";
        }

        ?>


        <label for="">Nombre de Usuario</label><br><input type="text" name="nombre" id="nombre"><br>
        <label for="">Correo</label><br><input type="email" name="email" id="email"><br>
        <label for="">Contraseña</label><br><input type="password" name="clave" id="clave"><br>


        <input type="submit" name="regist" value="registrarse"><br>
    </form>
</body>

</html>