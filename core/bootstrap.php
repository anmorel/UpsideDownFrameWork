<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 18:54
 */


define( 'APP_BASE_PATH', realpath (dirname(__FILE__) .DIRECTORY_SEPARATOR.'..'));
define( 'APP_LIBS_PATH', realpath (dirname(__FILE__) .DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'libs'));


function __autoload($class)
{
    $class = str_replace('\\', '/', $class);

    $file = APP_BASE_PATH.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$class . '.php';
    if(file_exists($file)) {
        require $file;
    }
}