<?php
// redirige automáticamente al Home
header("Location: layouts/home.html");
exit();

    /*  ES mejor que el home sea el index.php 
        porque es lo primero que quieres que se vea y lo primero que carga la pagina
        Y si quiero crear una Sesion de usuario y que se vea en el home se necesita.
    */

//Provisional para pruebas
include_once "layouts/home.html";
include_once "dat/Usuario.php"; 
include_once "dat/Dinosaurio.php";
?>