<?php
namespace Vendor;

class Object
{
    protected $array = [];

    public function __set($key, $value)
    {
        $this->array[$key] = $value;
    }

    public function __get($key)
    {
        //echo __METHOD__;
        return $this->array[$key];
    }

    public function __call($func, $param)
    {
        var_dump($func);
        var_dump($param);
        return "Call Magic Function\n";
    }
    public static function __callStatic($func, $param)
    {
        var_dump($func);
        var_dump($param);
        return "Call Magic Function\n";
    }
    public function __toString()
    {
        return __METHOD__;
    }
    public function __invoke($param, $param2)
    {
        var_dump($param);
        var_dump($param2);
        return 'invoke';
    }
    public static function test()
    {

    }
}
