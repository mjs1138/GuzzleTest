
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<p>Hello world! This is HTML5 Boilerplate.</p>

<?php
require_once 'vendor/autoload.php';

//use GuzzleHttp\Cookie\CookieJar;
//use GuzzleHttp\Promise;
//use GuzzleHttp\Psr7;
//use Psr\Http\Message\UriInterface;
//use Psr\Http\Message\RequestInterface;
//use Psr\Http\Message\ResponseInterface;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


$client = new Client([
    // Base URI is used with relative requests
//    'base_uri' => 'http://httpbin.org',
    'base_uri' => 'http://vt-vjapp1-dev.cdc.nicusa.com:8080/dmvex/vehiclesByPid?pid=70642581',
    // You can set any number of default request options.
    'timeout' => 2.7,
]);

//https://archive.org/advancedsearch.php?q=bunny+AND+licenseurl:[http://creativecommons.org/a+TO+http://creativecommons.org/z]&fl[]=identifier,title,mediatype,collection&rows=15&output=json&callback=IAE.search_hits
//$request = new Request('GET', 'http://httpbin.org/anything');
//$request = new Request('GET', 'http://vt-vjapp1-dev.cdc.nicusa.com:8080/dmvex/vehiclesByPid?pid=70642581'); // 0219345A,  70642581
$request = new Request('GET', 'https://archive.org/metadata/gd73-06-10.sbd.hollister.174.sbeok.shnf');



$response = $client->send($request, ['timeout' => 2]);
$body = $response->getBody();
$decodedJson = json_decode($body);
echo $body;

$firstCar = $decodedJson->content[0]->registrationNumber;



$a=1;
?>

</body>
</html>
