<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //Inicio de Sesión
    session_start();

    //Si no se ha logueado y accede a esta página, muestra mensaje de error y destruye sesión
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

<!--Inicio HTML-->
<!DOCTYPE html>
<html lang="es">

<!---Inicio Header-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!---Fin Header-->

<!---Inicio Body-->
<body>
    <h1>Hola :)))</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
<!---Fin Boduy-->

</html>