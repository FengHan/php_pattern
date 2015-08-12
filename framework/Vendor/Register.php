<?php

namespace Vendor;


class Register
{
    protected static $objests;
    public static function set($alias, $object)
    {
        self::$objests[$alias] = $object;
    }

    public static function get($name)
    {
        return self::$objests[$name];
    }
    public function _unset($alias)
    {
        unset(self::$objests[$alias]);
    }
}