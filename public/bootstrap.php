<?php

declare(strict_types=1);

use core\Application;
use DI\ContainerBuilder;

require '../vendor/autoload.php';
require '../app/definitions/constantes.php';

$container = new ContainerBuilder();

$container->useAttributes(true);

$container->addDefinitions(APP_PATH . '/definitions/container.php');

$container = $container->build();

Application::resolve($container);
