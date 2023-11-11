<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    //Objeto conexion a Base de Datos
    include 'conexion_be.php';

    //Creación de variables y asignación de valores por metodo POST
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Hasheo de contraseña
    $password = hash('sha512', $password);

    //Creación del query que almacena la información de login en la Base de Datos
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, password) VALUES 
        ('$nombre_completo', '$correo', '$usuario', '$password')";

    //Verificar que el correo no se duplique en Base de Datos
    $query_verificacion_correo = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $verificar_correo = mysqli_query($conexion, $query_verificacion_correo);
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta en uso, por favor inicia sesión o elige otro...");
                window.location = "../index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    //verificar que el username no se repita en Base de Datos
    $query_verificacion_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $verificar_usuario = mysqli_query($conexion, $query_verificacion_usuario);
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este nombre de usuario ya esta en uso, por favor inicia sesión o elige otro...");
                window.location = "../index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    //Ejecución del Query
    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
            <script>
                alert("Usuario registrado exitosamente!");
                window.location = "../index.php";
            </script>
        ';
    } else{
        echo '
            <script>
                alert("Usuario registrado exitosamente!");
                window.location = "../index.php";
            </script>
        ';
    }

    //Cerramos Conexión
    mysqli_close($conexion);
?>