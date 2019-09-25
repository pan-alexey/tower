<?php
chdir( realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR );
define('CORE_PATH',realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR );
define('ROOT_PATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..').DIRECTORY_SEPARATOR);


// error_reporting(E_ALL | E_STRICT);
// ini_set('display_errors', true);

if( file_exists(CORE_PATH.'vendor/autoload.php')  ){
    require CORE_PATH.'vendor/autoload.php'; 
}
require CORE_PATH.'autoload.php'; 
$autoload = new Tower\Autoloader;
$autoload->addNamespace('Tower', CORE_PATH);
$autoload->register();