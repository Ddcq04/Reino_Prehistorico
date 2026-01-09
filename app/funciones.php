<?php
//Acciones del index
require_once __DIR__ . '/config.php';

function validar_usuario($usuario, $clave) {
    $modelo = AccesoDatos::getModelo();
    $usuarioBD = $modelo->getUsuario($usuario);
    if ($usuarioBD && $usuarioBD->nombre === $usuario && password_verify($clave, $usuarioBD->hash_contrasena)) {
        return true;
    }
    return false;
}

function existe_usuario($usuario){
    $modelo = AccesoDatos::getModelo();
    $usuarioBD = $modelo->getUsuario($usuario);

    if($usuarioBD && $usuarioBD->nombre === $usuario){
        return true;
    }
    return false;
}

//Votar por dinosaurio
function votar($nombre_usuario, $id_dinosaurio) {
    $modelo = AccesoDatos::getModelo();
    $usuario = $modelo->getUsuario($nombre_usuario);
    $yavoto = $modelo->yaVoto($usuario->id,$id_dinosaurio);
    if(!$yavoto) {
        $modelo->votarDinosaurio($usuario->id, $id_dinosaurio);
    }else return "fallo";
}

?>