<?php
Test1::test();

Test2::test();

function __autoload($class)
{
    require __DIR__ . '/' . $class . '.php';
}
// ����һ����һ����Ŀ�л��õ������Ŀ����ε���ʱ���ᱨ�����ڲ����ˡ�