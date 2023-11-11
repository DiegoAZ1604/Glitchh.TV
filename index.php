<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //Inicio de Sesión
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }
?>

<!--Inicio HTML-->
<!DOCTYPE html>
<html lang="en">

<!---Inicio Header-->
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
<!---Fin Header-->

<!---Inicio Body-->
<body>
    <main>
        <!--Inicio Main Container-->
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
        <!--Fin Main Container-->

            <!--Formularios Login y Registro-->
            <div class="contenedor-login-register">

                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Entrar</button>
                </form>

                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario-register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo"  name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                <!--Roles-
                    <p>Selecciona tu rol:</p>
                    <label>
                        <input type="checkbox" name="roles[]" value="viewer"> Viewer
                    </label>
                    <label>
                        <input type="checkbox" name="roles[]" value="streamer"> Streamer
                    </label>
                    <label>
                        <input type="checkbox" name="roles[]" value="moderator"> Moderator
                    </label>
                -->

                    <button>Registrarse</button>
                </form>
            <!--Fin Formulario Login y Registro-->
            </div>
        </div>
    </main>
    <script src="/Glitchh/assets/javascript/login.js"></script>
</body>
<!--Fin Body-->
</html>