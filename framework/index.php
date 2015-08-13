<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

// 用到了三种设计模式： 数据对象映射模式，工厂模式和注册器模式
class Page
{
    public function index()
    {
        $user = \Vendor\Factory::getUser(1);
        $user->username = 'sherry';
        var_dump($user);
        $this->test();
    }

    public function test()
    {
        $user = \Vendor\Factory::getUser(1);
        $user->email = 'sunny@example.com';
        var_dump($user);
    }
}
$page = new Page();
$page->index();


