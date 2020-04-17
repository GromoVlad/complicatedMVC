<?php

define("DEBUG", true);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/webShop/core');
define("LIBS", ROOT . '/vendor/webShop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'watches');
define("PATH", 'http://webshop');
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';