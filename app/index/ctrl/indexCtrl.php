<?php

namespace app\index\ctrl;

use core\lib\model;

class indexCtrl extends \core\kiking
{
    public function index()
    {
        // $temp = \core\lib\conf::get('CTRL', 'route');
        $temp = \core\lib\conf::get('MODULE', 'route');
        dd($temp);
        dd(12);
        exit();
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