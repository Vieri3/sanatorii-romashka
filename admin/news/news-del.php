<?php

    require_once $_SERVER["DOCUMENT_ROOT"] .  "/admin/connect.php";

    $news_id = $_GET["id"];

    mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`news_id` = '$news_id'");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/news/news-page-admin.php');

?>