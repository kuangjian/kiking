<?php
namespace app\ctrl;

class indexCtrl extends \core\kiking
{
    public function index()
    {
        $temp = \core\lib\conf::get('CTRL', 'route');
        $temp = new \core\lib\model();
        dump($temp);
        $data = 'Hello World';
        $this->data('data', $data);
        $this->view('index.html');
    }

    public function blog()
    {
        dump(456789);
    }
}