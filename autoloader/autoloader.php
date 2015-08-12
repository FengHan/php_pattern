<?php
Test1::test();

Test2::test();

function __autoload($class)
{
    require __DIR__ . '/' . $class . '.php';
}
// 方法一：在一个项目中会用到多个项目，多次调用时，会报错，现在不用了。