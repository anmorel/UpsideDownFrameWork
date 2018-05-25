<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 22:14
 */

namespace udfw;

require APP_BASE_PATH.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'responses'.DIRECTORY_SEPARATOR.'responseHTML.php';

class response
{
    static function getResponse($type = 'html') {

        switch ($type){
            case 'html' :
            default :
                $resp = new responseHTML();
            break;
        }

        return $resp;
    }
}