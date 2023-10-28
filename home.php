<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert( "Debes iniciar sesión > : (" );
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola :)))</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>