<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 19:56
 */

namespace app;

require APP_BASE_PATH.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'response.php';

use udfw\request;
use udfw\response;

class app
{

    function index($param = null) {
        $resp = response::getResponse();
        $resp->assign('param', $param);
        $resp->display('app-app-index.tpl');
    }


    function index2($param = null) {
        $resp = response::getResponse();
        $resp->assign('param', $param);
        $resp->assign('data', request::getPostData());
        $resp->display('app-app-index2.tpl');
    }
}