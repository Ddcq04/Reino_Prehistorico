<?php
session_start();

$timeout = 600; 

if (!isset($_SESSION['usuario'])) {
    header("Location: ../layouts/inicioform.php");
    exit();
}

if (isset($_SESSION['ultimo_movimiento']) &&
    (time() - $_SESSION['ultimo_movimiento']) > $timeout) {

    session_unset();
    session_destroy();
    header("Location: /Prueba_DINO/Reino_Prehistorico/layouts/inicioform.php?timeout=1");
    exit();
}

$_SESSION['ultimo_movimiento'] = time();