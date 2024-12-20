<?php

// Definisi kelas Student
class Student {
    var $name; // Properti untuk menyimpan nama siswa
    var $country = 'None'; // Properti dengan nilai default 'None'
}

// Membuat dua objek dari kelas Student
$student1 = new Student;
$student2 = new Student;

// Mengatur properti 'name' untuk masing-masing objek
$student1->name = 'Anto';
$student2->name = 'Rini';

// Menampilkan nilai properti 'name' dari setiap objek
echo $student1->name . "<br />"; // Output: Anto
echo $student2->name . "<br />"; // Output: Rini
echo "<br />";

// Mendapatkan daftar properti dan nilai default dalam kelas Student
$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<br />";
print_r($class_vars); // Menampilkan array properti dan nilai default
echo "<br />";
echo "<br />";

// Mengecek apakah properti 'name' ada dalam kelas Student
if (property_exists('Student', 'name')) {
    echo "Properti name tersedia"; // Output: Properti name tersedia
} else {
    echo "Properti name tidak tersedia";
}
