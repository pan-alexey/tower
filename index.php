<?php



$_['/{name:[A-Za-z]+}/'] = [
    "public" => "name",

];

print_r( $_ );

if (!defined("STDIN")) {
    include './tower/server.php';
}else{
    include './tower/console.php';
}


