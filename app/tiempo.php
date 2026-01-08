<?php
session_start();

$timeout = 600; // segundos (10 min serían 600)

if (!isset($_SESSION['usuario'])) {
    header("Location: ../layouts/inicioform.php");
    exit();
}

if (isset($_SESSION['ultimo_movimiento']) &&
    (time() - $_SESSION['ultimo_movimiento']) > $timeout) {

    session_unset();
    session_destroy();
    header("Location: ../layouts/inicioform.php?timeout=1");
    exit();
}

$_SESSION['ultimo_movimiento'] = time();