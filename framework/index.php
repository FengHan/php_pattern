<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

$obj = new \Vendor\Object();
//$obj->title = "hello";
//echo $obj->title;
//$obj->hello(123, 456);
//echo \Vendor\Object::hello('hi', 'world');
//echo $obj;
echo $obj('hello', 123);