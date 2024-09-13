<?php
    require_once 'functions.php';

    $db_host = CONFIG['db_host'];
    $db_user = CONFIG['db_user'];
    $db_pass = CONFIG['db_pass'];
    $db_name = CONFIG['db_name'];

    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
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
