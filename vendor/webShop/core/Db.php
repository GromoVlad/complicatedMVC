<?php


namespace webShop;


use \RedBeanPHP\R as R;


class Db
{
    use TraitSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!R::testConnection()) {
            throw new \Exception("Нет сондинения с БД", 500);
        }
        R::freeze(true);
        if (DEBUG) {
            R::debug(true, 1);
        }
    }
}