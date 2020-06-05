<?php

class MyClass{

public static $count = 0;

public function __construct()
{
    self::$count++;
}

public function getCount(){
    return self::$count;
}


}

$a = new MyClass();
$b = new MyClass();
$c = new MyClass();

echo $a->getCount();