<?php

namespace Vendor;


class Database
{
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