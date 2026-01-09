<?php
require_once "app/config.php";
require_once "app/funciones.php";
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: layouts/home.php");
    exit();
} else {
    header("Location: layouts/inicioform.php");
}

//Manejar acciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    switch($accion) {
        case "registrarse"://Alejandro
            break;
        case "inicio_sesion"://Alejandro
            break;
        case "votar":
            votar($_SESSION["usuario"],$_POST["id_dino"]);
            break;

    }
}

?>
