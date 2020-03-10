<?php
namespace app\ctrl;

class indexCtrl
{
    public function index()
    {
        dump('it is indexsss');
        $model = new \core\lib\model();
        $sql = 'SELECT * FROM kiking_article_type';
        $res = $model->query($sql);
        dump($res->fetchAll());
    }

    public function blog()
    {
        dump(456789);
    }
}