<?php
include __DIR__."/../bootstrap.php";

$http = new swoole_http_server("0.0.0.0", 9501);

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();