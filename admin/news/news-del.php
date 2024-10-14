<?php

    require_once $_SERVER["DOCUMENT_ROOT"] .  "/functions.php";

    $news_id = $_GET["id"];

    deleteDBdata("DELETE FROM `news` WHERE `news_id` = '$news_id'");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/news/news-page-admin.php');

?>