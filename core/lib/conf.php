<?php

namespace core\lib;

class conf
{
    public static $conf = [];

    public static function get($name, $file)
    {
        $file = KIKING . '\core\config\\' . $file . '.php';

        if (is_file($file)) {
            $conf = include $file;
            if (isset($conf[$name])) {
                self::$conf[$file] = $conf;
                return $conf[$name];
            } else {
                throw new \Exception('没有这个配置项' . $name);
                
            }
        } else {
            throw new \Exception('找不到配置文件' . $file);
        }
    }
}