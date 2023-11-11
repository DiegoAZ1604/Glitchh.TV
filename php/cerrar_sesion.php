<?php
    //Inicia sesión
    session_start();

    //Destruye sesión
    session_destroy();

    //Redirige a index.php
    header("location: ../index.php");
?>