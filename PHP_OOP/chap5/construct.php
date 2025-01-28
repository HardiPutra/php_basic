<?php

class Student
{
    public static $instanceCount = 0;

    public function __construct()
    {
        self::$instanceCount++;
    }
}

class Elementary extends Student
{
    public $total = 3;
}

class Junior extends Student
{
    public $total = 4;
}

class Senior extends Student
{
    public $total = 5;
}

$elementary = new Elementary;
echo "Elementary:  {$elementary->total}  <br/>";

$junior = new Junior;
echo "Junior:  {$junior->total}  <br/>";

$senior = new Senior;
echo "Senior:  {$senior->total}  <br/>";

echo"Total instance: " . Student::$instanceCount . "<br/>";