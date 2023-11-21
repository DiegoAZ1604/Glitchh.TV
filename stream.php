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

    require './vendor/autoload.php';

    use Symfony\Component\HttpClient\Psr18Client;
    use ApiVideo\Client\Client;
    use ApiVideo\Client\Model\LiveStreamsApi;

    $apiKey = 'your API key here';
    $apiVideoEndpoint = 'https://ws.api.video';

    $httpClient = new \Symfony\Component\HttpClient\Psr18Client();
    $client = new ApiVideo\Client\Client(
    $apiVideoEndpoint,
    $apiKey,
    $httpClient
);

$payload =(new \ApiVideo\Client\Model\LiveStreamCreationPayload())->setName("Live Stream")->setPublic(true);
$livestream = $client->liveStreams()->create($payload);

?>

<!--BEGIN: HTML-->
<!DOCTYPE html>
<html lang="es">

<!--BEGIN: head-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>
    <link rel="stylesheet" href="/Glitchh/assets/styles/stream.css">
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

        <!--BEGIN: Streamer-->
        <div class="content-wrapper">
            <div class="news-card">
                <div class="video">
                    <!--<video id="myVidPlayer" controls muted autoplay></video>-->
                    <iframe src="https://embed.api.video/live/li2A8GajO8WPdROOGIRpmRIe?token=523081f2-8c8c-4842-8a7a-57ed9416b67b" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen="true"></iframe>
                </div>
                <button id="snapshot" onclick="snapshot()">Snapshot</button>
                <button id="kill-camera" onclick="start_media()">Start</button>
                <button id="kill-camera" onclick="kill_media()">Terminate</button>
                <div class="mycanvas">
                    <h6>Captured snapshot</h6>
                    <canvas></canvas>
                </div>
            </div>

        </div>

        <!--END: Streamer-->
    </main>
    <script src="/Glitchh/assets/javascript/stream.js"></script>
</body>

</html>