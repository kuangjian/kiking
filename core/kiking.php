<?php

namespace core;

class kiking
{
    public static $classMap = [];
    public $data;

    public static function run()
    {
        \core\lib\log::init();
        $route = new \core\lib\route();
        $control = $route->ctrl;
        $action = $route->action;
        $ctrl_file = APP . '/ctrl/' . $control . 'Ctrl.php';
        $ctrl_class = MODULE . '\ctrl\\' . $control . 'Ctrl';
        if (is_file($ctrl_file)) {
            include $ctrl_file;
            $ctrl = new $ctrl_class();
            $ctrl->$action();
            \core\lib\log::log('CTRL: ' . $control . '    ACTION: ' . $action);
        } else {
            throw new \Exception('找不到控制器' . $ctrl_class);
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

    public function data($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function view($file)
    {
        $files = APP . '/views/' . $file;

        if (is_file($files)) {
            // extract($this->data);
            // include $file;
            $loader = new \Twig\Loader\FilesystemLoader(APP . '/views');
            $twig = new \Twig\Environment($loader, [
                'cache' => KIKING . '/log/twig',
                'debug' => DEBUG
            ]);
            $template = $twig->load($file);
            echo $template->render($this->data ? $this->data : []);
        }
    }
}