<?php

header('Content-Type: text/html; charset=utf-8');
ini_set('date.timezone', 'PRC');

# 定义常量
define('KIKING', realpath('./'));
define('CORE', KIKING . '/core');
define('APP', KIKING . '/app');
define('MODULE', '\app');
define('DEBUG', TRUE);

include 'vendor/autoload.php';

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $error_title = '框架出错了(.)(.)';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($error_title);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/kiking.php';

# 自动加载类
spl_autoload_register('\core\kiking::load');

\core\kiking::run();
