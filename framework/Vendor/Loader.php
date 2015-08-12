<?php
namespace Vendor;

class Loader
{
    /**
     * @param $class 包含命名空间的类名, 由spl_autoload_register传入
     *
     * @ example "App\Controller\Home\Index"
     * @ example "Vendor\Object"
     */
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\' ,'/' ,$class) . '.php';
    }
}