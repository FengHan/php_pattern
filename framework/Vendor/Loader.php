<?php
namespace Vendor;

class Loader
{
    /**
     * @param $class
     *
     * @ example "App\Controller\Home\Index"
     * @ example "Vendor\Object"
     */
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\' ,'/' ,$class) . '.php';
    }
}