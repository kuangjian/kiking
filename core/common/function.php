<?php
function dd($var)
{
    if (is_bool($var)) {
        echo "<pre style='position: relative; z-index: 19930506; padding: 10px; border-radius: 5px; background: #F5F5F5; border: 1px solid #aaa; font-size: 14px; line-height: 18px; opacity: 0.9;'>" . print_r('FALSE', TRUE) . "</pre>";
    } elseif (is_null($var)) {
        echo "<pre style='position: relative; z-index: 19930506; padding: 10px; border-radius: 5px; background: #F5F5F5; border: 1px solid #aaa; font-size: 14px; line-height: 18px; opacity: 0.9;'>" . print_r('NULL', TRUE) . "</pre>";
    } else {
        echo "<pre style='position: relative; z-index: 19930506; padding: 10px; border-radius: 5px; background: #F5F5F5; border: 1px solid #aaa; font-size: 14px; line-height: 18px; opacity: 0.9;'>" . print_r($var, TRUE) . "</pre>";
    }

    function post($name, $default = FALSE, $fitt = FALSE)
    {
        if (isset($_POST[$name])) {
            if ($fitt) {
                switch ($fitt) {
                    case 'int':
                        if (is_numeric($_POST[$name])) {
                            return $_POST[$name];
                        } else {
                            return $default;
                        }
                        break;
                    
                    case 'str':
                        if (is_string($_POST[$name])) {
                            return addslashes($_POST[$name]);
                        } else {
                            return $default;
                        }
                        break;
                    default:
                        # code...
                        break;
                }
            } else {
                return $default;
            }
        } else {
            return $default;
        }
    }

    function get($name, $default = FALSE, $fitt = FALSE)
    {
        if (isset($_GET[$name])) {
            if ($fitt) {
                switch ($fitt) {
                    case 'int':
                        if (is_numeric($_GET[$name])) {
                            return $_GET[$name];
                        } else {
                            return $default;
                        }
                        break;
                    
                    case 'str':
                        if (is_string($_GET[$name])) {
                            return addslashes($_GET[$name]);
                        } else {
                            return $default;
                        }
                        break;
                    default:
                        # code...
                        break;
                }
            } else {
                return $default;
            }
        } else {
            return $default;
        }
    }

    function jump($url)
    {
        header('Location: ' . $url);
        exit();
    }
}