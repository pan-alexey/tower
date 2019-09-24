<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);


chdir( realpath(dirname(__FILE__).'/').DIRECTORY_SEPARATOR );

define('COREPATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
define('ROOTPATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..').DIRECTORY_SEPARATOR);


if( file_exists(COREPATH.'vendor/autoload.php')  ){
    require COREPATH.'vendor/autoload.php'; 

    echo 123;
}

// require COREPATH.'autoload.php'; 

// $autoload = new Tower\Autoloader;
// $autoload->addNamespace('Tower', COREPATH);
// $autoload->register();