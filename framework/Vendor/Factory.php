<?php
namespace Vendor;

class Factory
{
    static $proxy = null;

    /**
     * @param $id
     * @return User
     */
    static function getUser($id)
    {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    /**
     * @param $name
     * @return bool
     */
    static function getModel($name)
    {
        $key = 'app_model_' . $name;
        $model = Register::get($key);
        if (!$model) {
            $class = '\\App\\Model\\' . ucwords($name);
            $model = new $class;
            Register::set($key, $model);
        }
        return $model;
    }

    public static function getDatabase($id = 'proxy')
    {
        if ($id == 'proxy') {
            // 单例模式
            if (!self::$proxy) {
                self::$proxy = new \Vendor\Database\Proxy;
            }
            return self::$proxy;
        }

        $key = 'database_' . $id;
        if ($id == 'slave') {
            // 在工厂方法读取配置，生成可配置化的对象
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)];
        } else {
            $db_conf = Application::getInstance()->config['database'][$id];
        }
        // 注册数模式，
        $db = Register::get($key);
        if (!$db) {
            $db = new Database\MySQLi();
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
            //将对象注册到全局树上
            Register::set($key, $db);
        }
        return $db;
    }
}