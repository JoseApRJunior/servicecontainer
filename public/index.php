<?php

use app\library\Auth;
use core\Router;
use DI\Container;

require '../public/bootstrap.php';

/** @var Container $container */

$auth = $container->get(Auth::class);

$auth->auth(
    $container->call([Auth::class, 'auth'])
);

// $router = new Router($container);
// $router->create(require BASE_PATH . '/routes/web.php');
