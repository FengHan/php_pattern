<?php

namespace Vendor\Database;

use Vendor\IDatabase;

class PDO implements  IDatabase
{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        $dsn = "mysql:dbname=$dbname;host=$host;";
        try {
            $conn = new PDO($dsn, $user, $password);
            $this->conn = $conn;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function close()
    {
        unset($this->conn);
    }
}