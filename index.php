<?php 
namespace last;
require_once "autoload.php";
use \volvo\Car as Volvo;
use \last\Car as Ford;
//comment

$o = new Volvo();
$o->drive();
$o = new Ford();
$o->drive();
$b = new Truck();
$b->drive();
$c = new Jeep();
$c->drive();
$d = new Ship();
$d->drive();
