<?php
define('BASEDIR', __DIR__);

include BASEDIR . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');


Vendor\Application::getInstance(__DIR__)->dispatch();