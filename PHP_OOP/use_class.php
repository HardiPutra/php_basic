<?php

class Student{
    var $firstName;
    var $lastName;
    var $country = 'None';

    function sayHello()
    {
        return 'Hello, World!';
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
 
$student1 = new Student;

$student1->firstName = 'Anto';
$student1->lastName = 'Rini';

echo $student1->firstName . "<br />";
echo $student1->lastName . "<br />";

echo $student1->sayHello() . "<br />";
echo $student1->fullName() . "<br />";
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