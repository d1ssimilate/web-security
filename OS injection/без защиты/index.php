<form method="POST">
    <input type="text" placeholder="Введите название каталога" name="dir">
    <input type="submit" value="Запустить" name="start">
</form>

<?php

if (!empty($_POST['start'])) {
    system("mkdir $_POST[dir]");
    header("Location:/");
}