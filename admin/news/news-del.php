<?php

    require_once "../connect.php";

    $news_id = $_GET["id"];

    mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`news_id` = '$news_id'");

    header('Location: http://sanatorii-romashka/admin/news/news-page-admin.php');

?>