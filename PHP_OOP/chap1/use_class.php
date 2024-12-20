<?php

// Definisi kelas Student
class Student {
    var $firstName; // Properti untuk menyimpan nama depan siswa
    var $lastName;  // Properti untuk menyimpan nama belakang siswa
    var $country = 'None'; // Properti dengan nilai default 'None'

    // Method untuk mengembalikan pesan 'Hello, World!'
    function sayHello() {
        return 'Hello, World!';
    }

    // Method untuk menggabungkan firstName dan lastName menjadi nama lengkap
    function fullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

// Membuat objek $student1 dari kelas Student
$student1 = new Student;

// Mengatur nilai properti 'firstName' dan 'lastName' untuk objek $student1
$student1->firstName = 'Anto';
$student1->lastName = 'Rini';

// Menampilkan nilai properti 'firstName' dan 'lastName'
echo $student1->firstName . "<br />"; // Output: Anto
echo $student1->lastName . "<br />";  // Output: Rini

// Memanggil method 'sayHello' dan 'fullName' pada objek $student1
echo $student1->sayHello() . "<br />"; // Output: Hello, World!
echo $student1->fullName() . "<br />"; // Output: Anto Rini
echo "<br />";

// Mendapatkan daftar method yang dimiliki kelas Student
$class_method = get_class_methods('Student');
echo "Properti milik Student: ";
echo "<br />";
print_r($class_method); // Menampilkan array nama method
echo "<br />";

// Mengecek apakah method 'name' ada dalam kelas Student
if (method_exists('Student', 'name')) {
    echo "Method sayHello tersedia"; // Tidak akan dieksekusi, karena 'name' bukan method
} else {
    echo "Method sayHello tidak tersedia"; // Output: Method sayHello tidak tersedia
}
