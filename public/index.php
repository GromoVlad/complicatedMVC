<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \webShop\App();

//debug(\webShop\App::$app->getProperties());

//debug(\webShop\Router::getRoutes());