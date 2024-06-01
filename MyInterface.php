<?php
namespace Home;

Interface MyInterface 
{
    const MY_CONST = 2;
    public function methodA();
}

abstract class MyClassA implements MyInterface
{
    protected static $var = 2;

}
class MyClassB extends MyClassA
{
    public function methodA()
    {
        echo "MyInterface Method\n";
        MyClassA::$var = 4;
        echo MyClassA::$var;
    }
    public function MethodB()
    {
        return __CLASS__;
    }
}
echo MyInterface::MY_CONST;
//echo MyClassA::$var;
$obj = new MyClassB;
$obj->methodA();
echo "\n" . $obj->MethodB();
echo "\n" . MyClassB::class;