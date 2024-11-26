<?php

use core\Router;

require '../vendor/autoload.php';

$routes = require '../routes/web.php';

$router = new Router;
$router->create($routes);
