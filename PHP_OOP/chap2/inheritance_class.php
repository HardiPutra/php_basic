<?php

// Definisi kelas User
class User {
    var $firstName;  // Properti untuk menyimpan nama depan
    var $lastName;   // Properti untuk menyimpan nama belakang
    var $userName;   // Properti untuk menyimpan username

    // Method untuk mengembalikan nama lengkap
    function fullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

// Definisi kelas Customer yang mewarisi dari kelas User
class Customer extends User {
    // Tidak ada properti atau method tambahan, hanya mewarisi dari User
}

// Membuat objek $c dari kelas Customer
$c = new Customer;

// Mengatur properti 'firstName' dan 'lastName' untuk objek $c
$c->firstName = 'Customer';
$c->lastName = 'Hards';

// Memanggil method fullName() yang diwarisi dari kelas User
echo $c->fullName() . "<br/>"; // Output: Customer Hards

// Mengecek apakah $c adalah instance dari subclass User
if (is_subclass_of($c, 'User')) {
    echo "instance Customer merupakan subclass User <br >"; // Output: instance Customer merupakan subclass User
}

// Mendapatkan daftar kelas induk dari $c
$parents = class_parents($c);
echo implode(', ', $parents); // Output: User
