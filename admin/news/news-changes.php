<?php require_once "../connect.php"; ?>

<?php

    $news_id = $_POST["news_id"];
    $news_date = $_POST["news_date"];
    $news_text = $_POST["news_text"];
    $news_color = $_POST["news_color"];

    mysqli_query($connect, "UPDATE `news` SET `news_date` = '$news_date', `news_text` = '$news_text', `news_color` = '$news_color' WHERE `news` . `news_id` = '$news_id'");

    header("Location: http://sanatorii-romashka/admin/news/news-page-admin.php");

?>