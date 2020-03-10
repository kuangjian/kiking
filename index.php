<?php

# 定义常量
define('KIKING', realpath('./'));
define('CORE', KIKING . '/core');
define('APP', KIKING . '/app');
define('MODULE', '\app');

define('DEBUG', TRUE);
if (DEBUG) {
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/kiking.php';

# 自动加载类
spl_autoload_register('\core\kiking::load');

\core\kiking::run();
