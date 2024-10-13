<?php 

    require_once $_SERVER["DOCUMENT_ROOT"] .  "/functions.php";

    $news_date = $_POST["news_date"];
    $news_text = $_POST["news_text"];
    $news_color = $_POST["news_color"];

    insertDBdata("INSERT INTO `news` (`news_id` , `news_date`, `news_text`, `news_color`) VALUES (NULL, '$news_date', '$news_text', '$news_color')");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/news/news-page-admin.php');

?>