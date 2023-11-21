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

<!---BEGIN: HTML-->
<!DOCTYPE html>
<html lang="es">

<!--BEGIN: head-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glitchh.TV</title>
    <link rel="stylesheet" href="/Glitchh/assets/styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playpen+Sans:wght@100;200;300;400;500;600;700;800&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
<!---END: Head-->

<body>
    <main>
        <!-- BEGIN: Sidebar -->
        <div class="sidebar bar-block border-right" style="display:none" id="mySidebar">
            <button onclick="side_close()" class="bar-item large">Cerrar &times;</button>
            <a href="/Glitchh/home.php" class="bar-item button">Explorar</a>
            <a href="/Glitchh/stream.php" class="bar-item button">Iniciar Stream</a>
            <a href="php/cerrar_sesion.php" class="bar-item button">Logout</a>
        </div>
        <!-- END: Sidebar -->

        <!-- Page Content -->
        <div class="teal">
            <button class="button teal xlarge" onclick="side_open()">☰</button>
            <div class="container">
                <h1>Glitchh.TV</h1>
            </div>
        </div>

        <!--Begin: Cards-->
        <div class="content-wrapper">

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <a href="#" class="news-card__card-link"></a>
                <img src="/Glitchh/assets/images/default.jpg" alt="" class="news-card__image">
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Stream Name</h2>
                    <div class="news-card__post-date">Streamer Name</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt">Stream Description&hellip;
                        </p>
                        <a href="#" class="news-card__read-more">Go Glitchh <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!--END: Cards-->
    </main>
    <script src="/Glitchh/assets/javascript/home.js"></script>
</body>

</html>