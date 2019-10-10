<?php



$_["db"]['master'] = [];
$_["db"]['slave'][] = [];



// Master/Slave 
$_["*"]["master"] = [
    "host" => "localhost",
    "driver" => 'mysql', // mssql / mysql / oci8 / pgsql / sqilite
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