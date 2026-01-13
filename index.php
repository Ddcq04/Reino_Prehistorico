<?php
session_start();

require_once "app/config.php";
require_once "app/funciones.php";
include_once "dat/Usuario.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['accion'])) {
        header("Location: layouts/inicioform.php");
        exit;
    }

    switch (trim($_POST['accion'])) {

        case "entrar":

            if (empty($_POST["nombre"]) || empty($_POST["clave"])) {
                header("Location: layouts/inicioform.php?error=Faltan datos");
                exit;
            }

            $nombre = trim($_POST["nombre"]);
            $clave  = trim($_POST["clave"]);

            if (validar_usuario($nombre, $clave)) {

                $_SESSION["usuario"] = $nombre;
                $_SESSION["ultimo_movimiento"] = time();

                header("Location: layouts/home.php");
                exit;

            } else {
                header("Location: layouts/inicioform.php?error=Usuario o contraseña incorrectos");
                exit;
            }

        break;


        case "registrarse":

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
                        
                        header("Location: layouts/home.php");
                        exit;
                    }
                }else{
                    
                    header("Location: layouts/registroform.php?error=El usuario ya existe o hubo un problema.");
                    exit;

                }

            }

        break;

        case "votar":

            if (!isset($_SESSION["usuario"])) {
                header("Location: layouts/inicioform.php");
                exit;
            }

            if (isset($_POST["id_dino"])) {
                votar($_SESSION["usuario"], $_POST["id_dino"]);
            }

            header("Location: tipos_dinosaurios.php?tipo=" . $_GET['tipo']);
            exit;

        break;

        case "invitado":
            
            $_SESSION["invitado"] = true;
            $_SESSION["ultimo_movimiento"] = time();

            header("Location: layouts/home.php");
            exit;

        break;
    }


}else {
    
    header("Location: layouts/inicioform.php");
    exit;
}
