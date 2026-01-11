<?php

require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/funciones.php';
include_once "Usuario.php";


$BD = AccesoDatos::getModelo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $clave = trim($_POST['clave']);
    $correo = trim($_POST['email']);

    $user = new Usuario();
    $user->nombre = $nombre;
    $user->hash_contrasena = password_hash($clave, PASSWORD_DEFAULT);
    $user->correo = $correo;


    if(!existe_usuario($nombre)){
        if ($BD->addUsuario($user)) {

            $_SESSION["usuario"] = $nombre;
            $_SESSION["ultimo_movimiento"] = time();
            
            header("Location: ../layouts/home.php");
            exit;
        }
    }else{
        
        header("Location: ../layouts/registroform.php?error=El usuario ya existe o hubo un problema.");
        exit;

    }

}

AccesoDatos::closeModelo();

?>
