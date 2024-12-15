<?php
$todos = [];
if(isset($_POST['todo'])){
    $data = $S_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    file_put_contents('todo.txt', serialize($todos));
}
?>

<h1>Todo App</h1>

<form method="POST">
    <label for="">Apa Kegitan hari ini</label> <br>
    <input type="text" nama="todo">
    <button type="submit" >Simpan</button>
</form>
<ul>
    <li>
        <input type="checkbox" name="todo">
        <label for="">Todo 1</label>
        <a href="#">Hapus</a>
    </li>
    <li>
        <input type="checkbox" name="todo">
        <label for="">Todo 2</label>
        <a href="#">Hapus</a>
    </li>
    <li>
        <input type="checkbox" name="todo">
        <label for="">Todo 3</label>
        <a href="#">Hapus</a>
    </li>
    <li>
        <input type="checkbox" name="todo">
        <label for="">Todo 4</label>
        <a href="#">Hapus</a>
    </li>
</ul>