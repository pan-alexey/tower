<?php

$_[':default'] = [
    "public" => "www",
    "controller" => "home",
    "method" => 'index',
];

$_[':404'] = [
    "public" => "www",
    "controller" => "error",
    "method" => '{404}',
];






$_['www.domain.{domain}/'] = [
    "public" => "domain"
];

// Controller width regexp
$_['/{root:"/[a-z0-9]+/i"}/{tree}/{page}'] = [
    "controller" => '{root}',
    "method" => '{tree}',
    "arg" => [
        "a" => '{root}',
        "b" => '{tree}',
        "v" => "{page}",
    ]
];
