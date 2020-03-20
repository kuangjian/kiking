<?php

namespace core\lib;

use core\lib\conf;

class model extends \PDO
{
    public function __construct()
    {
        $database = conf::all('database');
        try {
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWORD']);
        } catch (\PDOException  $e) {
            dump($e->getMessage());
        }
    }
}
