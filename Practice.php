<?php
namespace Home;
require_once "autoload.php";
use \Include\MyInterface;
use \Include\MyClassB;

$arr = [
    [ "name" => "Donald"],
    ["age" => 34]
];

foreach($arr as $newArr)
{
     foreach($newArr as $arrItem)
     {
        echo $arrItem ."\n";
     }
}