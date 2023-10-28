<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $validar_login = mysqli_query($conexion, $query);

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../home.php");
        exit();
    } else{
        echo '
        <script>
            alert("Credenciales inválidas, inténtelo de nuevo...");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

?>