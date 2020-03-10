<?php
namespace app\ctrl;

class indexCtrl extends \core\kiking
{
    public function index()
    {
        $data = 'Hello World';
        $age = 30;
        $arr = [
            'name' => 'aaa',
            'sex' => 2,
            'tel' => 12345679
        ];
        $this->data('arr', $arr);
        $this->data('age', $age);
        $this->data('data', $data);
        $this->view('index.html');
    }

    public function blog()
    {
        dump(456789);
    }
}