<?php


// Master/Slave 
$_["*"]["master"] = [
    "host" => "localhost",
    "driver" => 'mysqli', // mssql / pgsql / oci8
    "user" => "tower",
    "password" => "789789",
    'database' => 'tower',
];

$_["*"]['slave'][] = [
    "" => "",
    "host" => "localhost",
    "user" => "tower",
    "password" => "789789",
    'database' => 'tower_1'
];






// Multi Master
$_["*"]["master:1"] = [
    "" => "",
    "host" => "localhost",
    "user" => "tower",
    "password" => "789789",
    'database' => 'tower_1'
];

$_["*"]["master:2"] = [
    "" => "",
    "host" => "localhost",
    "user" => "tower",
    "password" => "789789",
    'database' => 'tower_1'
];