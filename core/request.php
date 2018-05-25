<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 19:00
 */

namespace udfw;

require ('error.php');

class request
{
    function processRequest()
    {
        global $gConfigUdfw;

        $module = (isset($_POST['module'])) ? $_POST['module'] : 'app';
        $dir = APP_BASE_PATH . DIRECTORY_SEPARATOR . $gConfigUdfw['moduleDir'] . DIRECTORY_SEPARATOR . $module;
        if (!is_dir($dir)) {
            error::die("Module not found.");
        }

        $controller = (isset($_POST['controller'])) ? $_POST['controller'] : 'app';
        $classController = '\\' . $module . '\\' . $controller;
        if (!class_exists($classController)) {
            error::die("Controller not found.");
        }

        $action = (isset($_POST['action'])) ? $_POST['action'] : 'index';
        if (!method_exists($classController, $action)) {
            error::die("Action not found.");
        }

        return array(
            'module' => $module,
            'controller' => $controller,
            'action' => $action,
        );
    }

    function processParam() {
        if(!isset($_POST['param'])) {
            return null;
        }
        $paramRaw = explode('/', $_POST['param']);
        $param = array();
        //var_dump(($paramRaw));

        for($i = 1; $i < count($paramRaw); $i=$i+2) {
            $param[$paramRaw[$i]] = $paramRaw[$i+1];
        }

        return $param;
    }

    static function getPostData() {
        if(!isset($_GET)) {
            return null;
        }

        return $_GET;
    }

}