<?php
    $connect = mysqli_connect('localhost', 'root', '', 'san_rom');
    if (!$connect) {
        die('Ошибка подключения к БД');
    };
    
    $cinema = mysqli_query($connect, "SELECT * FROM `cinema`");
    $cinema = mysqli_fetch_all($cinema); 

    $food = mysqli_query($connect, "SELECT * FROM `food`");
    $food = mysqli_fetch_all($food); 

    $news =  mysqli_query($connect, "SELECT * FROM `news`");
    $news = mysqli_fetch_all($news); 

    $menu =  mysqli_query($connect, "SELECT * FROM `menu`");
    $menu = mysqli_fetch_all($menu); 

?>
