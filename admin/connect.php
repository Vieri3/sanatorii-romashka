<?php
    $connect = mysqli_connect('localhost', 'root', '', 'san_rom');
    if (!$connect) {
        die('Ошибка подключения к БД');
    };
    
    $cinema = mysqli_query($connect, "SELECT * FROM `cinema`");
    $cinema = mysqli_fetch_all($cinema); 

    $meal = mysqli_query($connect, "SELECT * FROM `meal`");
    $meal = mysqli_fetch_all($meal); 

    $news =  mysqli_query($connect, "SELECT * FROM `news`");
    $news = mysqli_fetch_all($news); 

?>
