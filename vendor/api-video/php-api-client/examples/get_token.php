/* Retrieve details about a specific token you specify with the token ID. */

<?php
require __DIR__ .'/vendor/autoload.php';

$apiKey = 'your API key here';
$apiVideoEndpoint = 'https://ws.api.video';

$httpClient = new \Symfony\Component\HttpClient\Psr18Client();
$client = new ApiVideo\Client\Client(
    $apiVideoEndpoint,
    $apiKey,
    $httpClient
);

$response = $client->uploadTokens()->getToken('your token ID here');
echo($response);
