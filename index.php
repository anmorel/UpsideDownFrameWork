<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/05/2018
 * Time: 18:46
 */


require ('core/bootstrap.php');
require ('core/udfw.php');

\udfw\udfw::loadConfig('app');


\udfw\udfw::coord();