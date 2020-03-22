<?php

namespace core\lib;

use core\lib\conf;

class route
{
    public $module;
    public $ctrl;
    public $action;
    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path, '/'));

            if (isset($patharr[0])) {
                $this->module = $patharr[0];
            }

            if (isset($patharr[1])) {
                $this->ctrl = $patharr[1];
            } else {
                $this->ctrl = conf::get('CTRL', 'route');
            }
            if (isset($patharr[2])) {
                $this->action = $patharr[2];
            } else {
                $this->action = conf::get('ACTION', 'route');
            }

            $count = count($patharr) + 3;
            $i = 3;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 3;
            }
        } else {
            $this->module = conf::get('MODULE', 'route');
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
        }
    }
}