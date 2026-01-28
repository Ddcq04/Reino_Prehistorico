<?php
session_start();

$timeout = 100; 

if (!isset($_SESSION['usuario']) && !isset($_SESSION['invitado'])) {
    header("Location: /Reino_Prehistorico/layouts/inicioform.php");
    exit();
}

if (isset($_SESSION['ultimo_movimiento']) &&
    (time() - $_SESSION['ultimo_movimiento']) > $timeout) {

    session_unset();
    session_destroy();
    header("Location: /Reino_Prehistorico/layouts/inicioform.php?timeout=1");
    exit();
}

$_SESSION['ultimo_movimiento'] = time();