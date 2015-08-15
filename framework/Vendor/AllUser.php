<?php

namespace Vendor;


class AllUser implements \Iterator
{
    protected $ids;
    protected $index;
    public function __construct()
    {
        $db = Factory::getDatabase();
        $ids = $db->query('SELECT * FROM user');
        $this->ids = $id;
    }
    public function next()
    {
        $this->index ++;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function current()
    {
        $id =  $this->ids[$this->index];
       return Factory::getUser($id);
    }

    public function rewind()
    {
        $this->index = 0;
    }
    public function key()
    {
        $this->index;
    }
}