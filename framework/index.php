<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/' . '/Vendor/Loader.php';
spl_autoload_register('\\Vendor\\Loader::autoload');

// 观察者模式
class Event extends \Vendor\EventGenerator
{
    public function trigger()
    {
        echo 'hello<br>';
        $this->notify();
    }
}
// 观察者1
class Observer1 implements \Vendor\Observer
{
    public  function update($info = null) {
        echo 'luo ji 1<br>';
    }
}
// 观察者2
class Observer2 implements \Vendor\Observer
{
    public  function update($info = null) {
        echo 'luo ji 2<br>';
    }
}

$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();

