<?php

namespace Vendor;


Interface IDatabase
{
    public function connect($host, $user, $password, $dbname);
    public function query($sql);
    public function close();
}