<?php

namespace Vendor;


class Factory
{
    public static function createDatabase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);

        return $db;
    }
}