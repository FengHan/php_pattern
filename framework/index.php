<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

// �õ����������ģʽ�� ���ݶ���ӳ��ģʽ������ģʽ��ע����ģʽ
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


