<?php

namespace core;

class kiking
{
    public static $classMap = [];

    public static function run()
    {
        $route = new \core\lib\route();
        $ctrl_class = $route->ctrl;
        $action = $route->action;
        $ctrl_file = APP . '/ctrl/' . $ctrl_class . 'Ctrl.php';
        $ctrl_class = MODULE . '\ctrl\\' . $ctrl_class . 'Ctrl';
        if (is_file($ctrl_file)) {
            include $ctrl_file;
            $ctrl = new $ctrl_class();
            $ctrl->$action();
        } else {
            throw new Exception('找不到控制器' . $ctrl_class);
            
        }
    }

    public static function load($class)
    {
        if (isset($classMap[$class])) {
            return TRUE;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = KIKING . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return FALSE;
            }
        }
    }
}