<?php

namespace app\ctrl;

use core\lib\model;

class indexCtrl extends \core\kiking
{
    public function index()
    {
        // $temp = \core\lib\conf::get('CTRL', 'route');
        $model = new \app\model\cModel();
        $data = $model->lists();
        dd($data);
        $data = 'Hello World';
        $this->data('data', $data);
        $this->view('index.html');
    }

    public function blog()
    {
        dd(456789);
    }
}