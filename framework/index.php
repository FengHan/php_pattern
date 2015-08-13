<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

$strategy = isset($_GET['femail']) ? new \Vendor\FemaleUserStrategy() : new \Vendor\MaleUserStrategy();
$page = new \Vendor\Page();
$page->setStrategy($strategy);

$page->index();

