<?php
// Inisialisasi array untuk menyimpan daftar todo
$todos = [];
if(file_exists('todo.txt')){ 
    // Jika file todo.txt ada, baca isinya dan ubah dari format string menjadi array
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}

if(isset($_POST['todo'])){
    // Menangkap data yang dikirimkan melalui form dan menambahkannya ke daftar todo
    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0 // Default status: belum selesai
    ];
    saveData($todos); // Simpan data ke file
}

if(isset($_GET['status'])){
    // Mengubah status todo (0: belum selesai, 1: selesai)
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos); // Simpan data yang diperbarui
}

if(isset($_GET['hapus'])){
    // Menghapus todo berdasarkan key yang dikirimkan
    unset($todos[$_GET['key']]);
    saveData($todos); // Simpan perubahan
}

// Fungsi untuk menyimpan daftar todo ke file
function saveData($todos){
    file_put_contents('todo.txt', serialize($todos)); // Simpan dalam format string
    header('Location:todo_app.php'); // Redirect ke halaman utama
}

?>

<h1>Todo App</h1>

<!-- Form untuk menambah todo baru -->
<form method="POST">
    <label for="">Apa Kegitan hari ini</label> <br>
    <input type="text" name="todo">
    <button type="submit" >Simpan</button>
</form>

<!-- Menampilkan daftar todo -->
<ul>
    <?php foreach ($todos as $key => $value): ?>
    <li>
        <!-- Checkbox untuk mengubah status todo -->
        <input type="checkbox" name="todo" 
               onclick="window.location.href ='todo_app.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'" 
               <?php if($value['status'] == 1) echo 'checked';?>>
        <label>
            <?php 
                // Menampilkan todo dengan tanda coret jika statusnya selesai
                if($value['status'] == 1)
                    echo '<del>' .$value['todo'];
                else
                    echo $value['todo'];
            ?>
        </label>
        <!-- Link untuk menghapus todo -->
        <a href="todo_app.php?hapus=1&key=<?php echo $key; ?>" 
           onclick="return confirm('Apa anda yakin untuk menghapus todo ini?')">Hapus</a>
    </li>
    <?php endforeach; ?>
</ul>
