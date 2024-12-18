<?php
$todos = [];
if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}

if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    saveData($todos);
}   

if(isset($_GET['status'])){
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos);
}

if(isset($_GET['hapus'])){
    unset($todos[$_GET['key']]);
    saveData($todos);
}

function saveData($todos){
    file_put_contents('todo.txt', serialize($todos));
    header('Location:todo_app.php');
}

?>

<h1>Todo App</h1>

<form method="POST">
    <label for="">Apa Kegitan hari ini</label> <br>
    <input type="text" name="todo">
    <button type="submit" >Simpan</button>
</form>
<ul>
    <?php foreach ($todos as $key => $value): ?>
    <li>
        <input type="checkbox" name="todo" onclick="window.location.href ='todo_app.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'" <?php if($value['status'] == 1) echo 'checked';?>>
        <label >
            <?php 
                if($value['status'] == 1)
                    echo '<del>' .$value['todo'];
                else
                    echo $value['todo'];
            ?>
        </label>
        <a href="todo_app.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apa anda yakin untuk menghapus todo ini?')">Hapus</a>
    </li>
    <?php endforeach; ?>
  
</ul>