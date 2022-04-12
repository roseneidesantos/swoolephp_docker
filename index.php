<?php

$app = new swoole_http_server("0.0.0.0", 8099);

$app-> on("start", function($server){

echo "Executandi na porta 8090";

});

$app->on("request", function($request, $response){

    $response->header("Content-type", "text/html");
    $response->end("Olá Rose");

});

$app->start();