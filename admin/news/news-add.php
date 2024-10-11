<?php 

    require_once $_SERVER["DOCUMENT_ROOT"] .  "/admin/connect.php";

    $news_date = $_POST["news_date"];
    $news_text = $_POST["news_text"];
    $news_color = $_POST["news_color"];

    mysqli_query($connect, "INSERT INTO `news` (`news_id` , `news_date`, `news_text`, `news_color`) VALUES (NULL, '$news_date', '$news_text', '$news_color')");

    header('Location: http://sanatorii-romashka/admin/news/news-page-admin.php');

?>