<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

\Vendor\Factory::createDatabase();
$db = \Vendor\Register::get('db1');
var_dump($db);;
