<?php

namespace Vendor;

class Database
{
    protected static $db;
    private function __construct()
    {
    }

    public static function getInstance()
    {
        return self::$db ? : new self();
    }
    public function where($where)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }
}