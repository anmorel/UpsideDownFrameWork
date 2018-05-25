<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 22:19
 */

namespace udfw;

require (APP_LIBS_PATH.DIRECTORY_SEPARATOR.'smarty/Smarty.class.php');

class responseHTML extends \Smarty
{

    function __construct()
    {
        parent::__construct();

        //$this->debugging = true;

        $this->setTemplateDir(APP_BASE_PATH.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR);
        $this->setCompileDir(APP_BASE_PATH.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'templates_c'.DIRECTORY_SEPARATOR);
        $this->setConfigDir(APP_BASE_PATH.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);
        $this->setCacheDir(APP_BASE_PATH.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR);
    }
}