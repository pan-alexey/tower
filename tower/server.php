<?php
include "bootstrap.php";

//SERVER GLOBALS
$server = new \Tower\Source\Http\Server([
    "GET" => isset($_GET) ? $_GET : [],
    "POST" => isset($_POST) ? $_POST : [],
    "COOKIE" => isset($_COOKIE) ? $_COOKIE : [],
    "SESSION" => isset($_SESSION) ? $_SESSION : [],
    "SERVER" => isset($_SERVER) ? $_SERVER : [],
    "FILES" => isset($_FILES) ? $_FILES : [],
]);


$tower = "";


$server->request( function($varibles) use ($tower){
    

    ob_start();
    echo __FILE__;
    echo "<pre>";
    print_r($varibles);
    echo "</pre>";
    $buffer = ob_get_contents();
    ob_end_clean();


    
    //$App->azaza();
    return [
        "code" =>  200,  
        "headers" => [ "X-Developer" => ["Developer #1" , "Developer #2"]  ], 
        "body" => " $buffer ", 
    ];
});