<?php
/*
 * 5.3之后采用了更先进的商spl_autoload_register()函数
 * spl_autoload_register()函数取代了autoload()函数，可以兼容多个框架中的多个类的自动载入，
 * 避免出现__autoload（）在自动载入时会出现函数重复定义的报错
 */

spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test1::test();

Test2::test();

function autoload1($class)
{
    require __DIR__ . '/' . $class . '.php';
}

function autoload2($class)
{
    require __DIR__ . '/' . $class . '.php';
}
