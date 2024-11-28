<?php

use core\Router;
use DI\Container;

require '../public/bootstrap.php';

/** @var Container $container */
$router = new Router($container);
$router->create(require BASE_PATH . '/routes/web.php');
