<?php
// error_reporting(E_ALL | E_STRICT);
// ini_set('display_errors', true);

chdir( realpath(dirname(__FILE__).'/').DIRECTORY_SEPARATOR );

define('CORE_PATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
define('ROOT_PATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..').DIRECTORY_SEPARATOR);
define('APP_PATH', ROOT_PATH.DIRECTORY_SEPARATOR);

if( file_exists(CORE_PATH.'vendor/autoload.php')  ){
    require CORE_PATH.'vendor/autoload.php'; 
}


//require COREPATH.'autoload.php'; 
// $autoload = new Tower\Autoloader;
// $autoload->addNamespace('Tower', COREPATH);
// $autoload->register();