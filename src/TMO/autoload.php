<?php

function my_autoloader($class)
{
    $filename = WWW . str_replace('\\', DS, $class) . '.php';
    require_once($filename);
}
spl_autoload_register('my_autoloader');
