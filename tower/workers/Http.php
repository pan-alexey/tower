<?php
// include bootstrap
//nclude(realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..').DIRECTORY_SEPARATOR."bootstrap.php");
include __DIR__ . "/../bootstrap.php";



// //SERVER WRAPPER
// $server = new \Tower\Components\Http\Server([
//     "GET" => isset($_GET) ? $_GET : [],
//     "POST" => isset($_POST) ? $_POST : [],
//     "COOKIE" => isset($_COOKIE) ? $_COOKIE : [],
//     "SESSION" => isset($_SESSION) ? $_SESSION : [],
//     "SERVER" => isset($_SERVER) ? $_SERVER : [],
//     "FILES" => isset($_FILES) ? $_FILES : [],
// ]);