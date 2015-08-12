<?php
namespace Vendor;

class Loader
{
    /**
     * @param $class ���������ռ������, ��spl_autoload_register����
     *
     * @ example "App\Controller\Home\Index"
     * @ example "Vendor\Object"
     */
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\' ,'/' ,$class) . '.php';
    }
}