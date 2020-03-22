<?php

namespace app\model;

use core\lib\model;

class cModel extends model
{
    public $table = 'kiking_article_type';

    public function lists()
    {
        return $this->select($this->table, '*');
    }
}