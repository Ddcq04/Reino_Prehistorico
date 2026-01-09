<?php

session_start();

require_once __DIR__ . '/../app/funciones.php';

$msg = "";

if(!isset($_POST["nombre"]) || !isset($_POST["clave"])){

    header("Location: /Dinobots/layouts/inicio.html");
    exit;

}

$nombre = trim($_POST["nombre"]);

$clave = trim($_POST["clave"]);


if(validar_usuario($nombre,$clave)){

    $_SESSION["usuario"] = $nombre;
    $_SESSION["ultimo_movimiento"] = time();

    header("Location: ../layouts/home.php");
    exit;


}else{

    header("Location: ../layouts/inicioform.php?error=Usuario o contraseña incorrectos");
    exit;

}


?>