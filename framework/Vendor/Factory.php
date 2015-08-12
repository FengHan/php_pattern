<?php

namespace Vendor;


class Factory
{
    public static function createDatabase()
    {
        $obj = Database::getInstance();

        return $obj;
    }
}