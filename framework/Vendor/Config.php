<?php

namespace Vendor;

/**
 * Class Config
 * provide accessing objects as arrays
 */
class Config implements \ArrayAccess
{
    protected $path;
    protected $configs = [];

    /**
     * @param $path configs目录的绝对路径
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    // $key 对应的是configs下的文件名，例如controller.php, database.php
    public function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }

    public function offsetGet($key)
    {
        if (empty($this->configs[$key])) {
            $filePath = $this->path . '/' . $key. '.php';
            $config = require $filePath;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    public function offsetSet($key, $value)
    {
        throw new \Exception('Can not write config file.');
    }

    public function offsetUnset($key)
    {
        unset($this->configs[$key]);
    }
}