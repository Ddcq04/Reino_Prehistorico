<?php
session_start();

$timeout = 600; 

if (!isset($_SESSION['usuario']) && !isset($_SESSION['invitado'])) {
    header("Location: ../inicioform.php");
    exit();
}

if (isset($_SESSION['ultimo_movimiento']) &&
    (time() - $_SESSION['ultimo_movimiento']) > $timeout) {

    session_unset();
    session_destroy();
    header("Location: ../inicioform.php");
    exit();
}

$_SESSION['ultimo_movimiento'] = time();