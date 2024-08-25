<?php
    $connect = mysqli_connect('localhost', 'root', '', 'san_rom');

    if (!$connect) {
        die('Ошибка подключения к БД');
    };

    $cinema = mysqli_query($connect, "SELECT * FROM `cinema`");

    $cinema = mysqli_fetch_all($cinema); // чтобы вывело в массиве удобно-читаемо

?>
