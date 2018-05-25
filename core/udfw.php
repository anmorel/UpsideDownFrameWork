<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 18:47
 */

namespace udfw;

require('request.php');



class udfw
{
    static function loadConfig($config = 'default') {
        global $gConfigUdfw;

        $gConfigUdfw = parse_ini_file(APP_BASE_PATH.'/config/'.$config.'.ini.php');
    }

    static function coord() {
        $router = new request();
        $req =$router->processRequest();
        $class = '\\'.$req['module'].'\\'.$req['controller'];
        $controller  = new $class();
        $controller->{$req['action']}($router->processParam());

    }
}