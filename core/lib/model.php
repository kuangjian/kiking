<?php

namespace core\lib;

use core\lib\conf;
use Medoo\Medoo;

class model extends Medoo
{
    public function __construct()
    {
        $database = conf::all('database');
        parent::__construct($database);
    }
}
