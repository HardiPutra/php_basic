<?php

class Student{
    var $name;
    var $country = 'None';

    function sayHello()
    {
        return 'Hello, World!';
    }
}
 
$student1 = new Student;
$student2 = new Student;


$student1->name = 'Anto';
$student2->name = 'Rini';

echo $student1->name . "<br />";
echo $student2->name . "<br />";

echo $student1->sayHello() . "<br />";
echo $student2->sayHello() . "<br />";
echo "<br />";

$class_method = get_class_methods('Student');
echo "Properti milik Student: ";
echo "<br />";
print_r($class_method);
echo "<br />";


if (method_exists('Student', 'name')){
    echo "Method sayHello tersedia";
} else{
    echo "Method sayHello tidak tersedia";
}