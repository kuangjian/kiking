<?php

namespace app\admin\ctrl;

use core\lib\model;

class indexCtrl extends \core\kiking
{
    public function index()
    {
        // $temp = \core\lib\conf::get('CTRL', 'route');
        // $temp = \core\lib\conf::get('MODULE', 'route');
        $route = new \core\lib\route();
        dd($route);
        // $model = new \app\model\cModel();
        // $data = $model->lists();
        $data = 'Hello World';
        $this->data('data', $data);
        $this->view('index.html');
    }

    public function blog()
    {
        dd(456789);
    }
}