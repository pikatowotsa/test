<?php
namespace Include;

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
        MyClassA::$var = 4;
       return MyClassA::$var;
    }
    public function MethodB()
    {
        return __CLASS__;
    }
}
