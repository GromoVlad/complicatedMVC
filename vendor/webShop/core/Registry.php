<?php

namespace webShop;

class Registry
{
    use TraitSingletone;

    public static $properties = [];

    public function setProperty($key, $val)
    {
        self::$properties[$key] = $val;
    }

    public function getProperty($key)
    {
        if (isset(self::$properties[$key])) {
            return self::$properties[$key];
        }
    }

    public function getProperties()
    {
        return self::$properties;
    }

}