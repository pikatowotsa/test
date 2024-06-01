<?php


// spl_autoload_register(function($class){
//     require_once $class.".php";
//     echo "\n-------->>>>".$class."\n";
// });

spl_autoload_register('AutoLoadFunc');

function AutoLoadFunc($className) 
{
    require $className . ".php";
}

