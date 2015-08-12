<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

//$db = \Vendor\Factory::createDatabase();
//$db->where("1=1")->order('id desc0')->limit(1);
$db = \Vendor\Database::getInstance();
$db = \Vendor\Database::getInstance();
$db = \Vendor\Database::getInstance();
$db = \Vendor\Database::getInstance();
