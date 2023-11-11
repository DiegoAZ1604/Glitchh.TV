<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //Inicio de Sesión
    session_start();

    //Objeto conexion a Base de Datos
    include 'conexion_be.php';

    //Creación de variables y asignación de valores por metodo POST
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    //Creación de query que verifica si los datos coinciden con los valores de la base de datos
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    
    //Ejecución de Query
    $validar_login = mysqli_query($conexion, $query);

    //Validación de la Infromación, si es correcta, redirige a Home, 
    //sino es correcta, muestra mensaje de erroro
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


    //Cerramos Conexión
    mysqli_close($conexion);
?>