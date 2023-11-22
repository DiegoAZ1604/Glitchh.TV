<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Inicio de Sesión
    session_start();

    // Si no se ha logueado y accede a esta página, muestra mensaje de error y destruye sesión
    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert( "Debes iniciar sesión > : (" );
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

    /**
     * This script creates a live stream using the ApiVideo PHP SDK.
     * It requires the autoload.php file from the vendor directory.
     * The script uses the ApiVideo\Client\Client class to interact with the ApiVideo API.
     * It also uses the ApiVideo\Client\Model\LiveStreamCreationPayload class to set the live stream properties.
     * The Symfony\Component\HttpClient\Psr18Client class is used as the HTTP client.
     * The script requires an API key and the API endpoint URL to connect to the ApiVideo service.
     * The live stream is created with a name and set to public.
     * The script retrieves the assets of the live stream, including the iframe code.
     */

    require __DIR__ . '/vendor/autoload.php';

    use ApiVideo\Client\Client;
    use ApiVideo\Client\Model\LiveStreamCreationPayload;
    use Symfony\Component\HttpClient\Psr18Client;

    $apiKey = 'bSXbxNiAhzHHivCsSTnOtFfrHEwS1PTRQqDBbkYKjwN';
    $apiVideoEndpoint = 'https://ws.api.video';

    $httpClient = new Psr18Client();

    $client = new Client($apiVideoEndpoint, $apiKey, $httpClient);

    $payload = (new LiveStreamCreationPayload())
        ->setName("Glitchh-Test")
        ->setPublic(true);
    $livestream = $client->liveStreams()->create($payload);

    $assets = $livestream->getAssets();
    $iframe = $assets->getIframe();

?>

<!-- BEGIN: HTML -->
<!DOCTYPE html>
<html lang="es">

<!-- BEGIN: head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>
    <link rel="stylesheet" href="/Glitchh/assets/styles/stream.css">
</head>
<!-- END: Head -->

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

        <!-- BEGIN: Streamer -->
        <div class="content-wrapper">
            <div class="news-card">
                <div class="video">
                    <iframe src="https://embed.api.video/live/li1oLdnfUgddyOZYvpwVJ0lM" style="width: 100%; height: 600px; border: none;"></iframe>
                </div>
            </div>
        </div>
        <!-- END: Streamer -->
    </main>
    <script src="/Glitchh/assets/javascript/stream.js"></script>
</body>

</html>
