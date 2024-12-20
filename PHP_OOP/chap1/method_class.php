<?php

// Definisi kelas Student
class Student {
    var $name; // Properti untuk menyimpan nama siswa
    var $country = 'None'; // Properti dengan nilai default 'None'

    // Method untuk mengembalikan pesan 'Hello, World!'
    function sayHello() {
        return 'Hello, World!';
    }
}

// Membuat objek $student1 dan $student2 dari kelas Student
$student1 = new Student;
$student2 = new Student;

// Mengatur properti 'name' untuk masing-masing objek
$student1->name = 'Anto';
$student2->name = 'Rini';

// Menampilkan properti 'name' dari setiap objek
echo $student1->name . "<br />";
echo $student2->name . "<br />";

// Memanggil method sayHello dari masing-masing objek
echo $student1->sayHello() . "<br />";
echo $student2->sayHello() . "<br />";
echo "<br />";

// Mendapatkan daftar method yang dimiliki oleh kelas Student
$class_method = get_class_methods('Student');
echo "Properti milik Student: ";
echo "<br />";
print_r($class_method); // Menampilkan daftar method
echo "<br />";

// Mengecek apakah method 'name' ada dalam kelas Student
if (method_exists('Student', 'name')) {
    echo "Method sayHello tersedia";
} else {
    echo "Method sayHello tidak tersedia"; // Hasilnya ini, karena 'name' adalah properti, bukan method
}
