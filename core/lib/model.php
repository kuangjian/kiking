<?php

namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=kiking';
        $username = 'root';
        $passwd = '';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException  $e) {
            dump($e->getMessage());
        }
    }
}
