<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: layouts/home.php");
} else {
    header("Location: layouts/inicioform.php");
}
exit();
