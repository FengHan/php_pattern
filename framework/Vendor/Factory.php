<?php

namespace Vendor;


class Factory
{
    public static function createDatabase()
    {
        $obj = new Database();

        return $obj;
    }
}