<?php

namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;

    public function __construct()
    {
        $conf = conf::get('OPTION', 'log');
        $this->path = $conf['PATH'];
    }

    public function log($message, $file = 'log')
    {
        $dir = $this->path . date('YmdH');
        if (!is_dir($dir)) {
            mkdir($dir, '0777', TRUE);
        }

        return file_put_contents($dir . '/' . $file . '.php', date('Y-m-d H:i:s') . ' ' . json_encode($message) . PHP_EOL, FILE_APPEND);
    }
}