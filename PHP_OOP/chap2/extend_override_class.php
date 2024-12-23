<?php


class User {
    var $firstName; 
    var $lastName;  
    var $userName;   

    function fullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Customer extends User {
    var $city;
    var $countryy;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }
}

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Hards';
$c->city = 'Padang';
$c->country = 'indonesia';

echo $c->fullName() . "<br/>";
echo $c->location() . "<br/>";

if (is_subclass_of($c, 'User')) {
    echo "instance Customer merupakan subclass User <br >"; 
}

$parents = class_parents($c);
echo implode(', ', $parents); 
