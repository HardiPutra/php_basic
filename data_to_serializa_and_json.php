<?php
// Array berisi data anggota dengan nama dan golongan darah
$anggota = [
    ['nama' => 'Toni', 'gol_darah' => 'O'],
    ['nama' => 'Anto', 'gol_darah' => 'O'],
    ['nama' => 'Bujang', 'gol_darah' => 'A'],
    ['nama' => 'Gang', 'gol_darah' => 'AB'],
];

// Mengubah array $anggota menjadi string dalam format serialized
$data = serialize($anggota);

// Menyimpan data serialized ke file 'data.txt'
file_put_contents('data.txt', $data);

// Membaca data dari file 'data.txt'
$output = file_get_contents('data.txt');

// Mengubah string serialized kembali menjadi array
$hasil = unserialize($output);

// Menampilkan hasil berupa array
print_r($hasil);
