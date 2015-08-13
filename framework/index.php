<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');



$user = new \Vendor\User(1);

$user->username = 'jack';
$user->email = 'jack@example.com';
$user->regtime = date('Y-m-d H:i:s');
