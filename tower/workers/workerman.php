<?php
include __DIR__."/../bootstrap.php";

use Workerman\Worker;
// #### http worker ####
$http_worker = new Worker("http://0.0.0.0:8090");

// 4 processes
$http_worker->count = 1;

// Emitted when data received
$http_worker->onMessage = function($connection, $data)
{
    // $_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES are available
    var_dump($_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES);
    // send data to client
    $connection->send("hello world \n");
};

// run all workers
Worker::runAll();