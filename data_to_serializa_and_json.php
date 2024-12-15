<?php
$anggota = [
    ['nama' => 'Toni', 'gol_darah' => 'O'],
    ['nama' => 'Anto', 'gol_darah' => 'O'],
    ['nama' => 'Bujang', 'gol_darah' => 'A'],
    ['nama' => 'Gang', 'gol_darah' => 'AB'],
];

$data = serialize($anggota);
file_put_contents('data.txt', $data);

$output = file_get_contents('data.txt');
$hasil = unserialize($output);
print_r($hasil);