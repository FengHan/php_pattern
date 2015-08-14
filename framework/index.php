<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

// ×°ÊÎÆ÷Ä£Ê½

$draw = new \Vendor\Canvas();
$draw->init();
$draw->addDecorator(new \Vendor\ColorDrawDecorator('red'));
$draw->addDecorator(new \Vendor\SizeDrawDecorator('20'));
$draw->draw();
