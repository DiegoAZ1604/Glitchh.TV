<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glitchh</title>
    <link rel="stylesheet" href="/Glitchh/assets/styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playpen+Sans:wght@100;200;300;400;500;600;700;800&family=Quicksand:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
</head>
<body>
    <main>
        <div class="container-main">
            <div class="caja-trasera">
                <div class="caja-trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesión</p>
                    <button id="button-iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja-trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrarse</p>
                    <button id="button-registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formularios Login y Registro-->
            <div class="contenedor-login-register">

                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>

                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario-register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo"  name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="/Glitchh/assets/javascript/login.js"></script>
</body>
</html>