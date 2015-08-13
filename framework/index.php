<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

$db = new \Vendor\Database\PDO();

$db->connect('127.0.0.1', 'homestead', 'secret', 'homestead');
$db->query('show tables');

