<?php 
// Pesan yang akan ditambahkan ke dalam file
$pesan = "Selamat datang Brow... \n";

// file_put_contents() digunakan untuk menulis data ke dalam file
// FILE_APPEND memastikan data baru ditambahkan tanpa menghapus isi file sebelumnya
file_put_contents("content.txt", $pesan, FILE_APPEND);

// file_get_contents() digunakan untuk membaca seluruh isi file
$isi_file = file_get_contents("content.txt");

// Menampilkan isi file ke layar
echo $isi_file;
?>
