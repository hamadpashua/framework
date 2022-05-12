<?php

/*
|---------------------------------------------------
| Register the autoloader
|---------------------------------------------------
|
| Load the autoloader that will generated class that will be used
| 
*/

use Sailor\Sailor\Application\Application;
use Sailor\Sailor\Router\RouterDispatcher;

/*------------------------------------------------
 * Register the autoloader and configure system
 * with routes file
 * ------------------------------------------------
 *  for generating autoloading of third-party
 *  packages
 * */

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';
require_once BASE_PATH . '/routes/web.php';


/*------------------------------------------------
 * run the application
 * ------------------------------------------------
 *  Application bootstrap for reinventing the
 *  framework
 * 
 *  Handle the request and send response
 * 
 * */

 Application::run();
 new RouterDispatcher($router);