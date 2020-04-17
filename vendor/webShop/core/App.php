<?php

namespace webShop;

class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        $query = trim($_SERVER['QUERY_STRING'], '/');
        self::$app = Registry::getInstance();
        $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);
    }

    public function getParams()
    {
        $params = require_once CONF . '/params.php';
        if (!empty($params)){
            foreach ($params as $key => $val){
                self::$app->setProperty($key, $val);
            }
        }
    }
}