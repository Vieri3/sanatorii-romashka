<?php 

    require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/connect.php";

    $cinema_date = $_POST["cinema_date"];
    $cinema_time = $_POST["cinema_time"];
    $cinema_title = $_POST["cinema_title"];
    $cinema_title_data = $_POST["cinema_title_data"];
    $cinema_place = $_POST["cinema_place"];

    mysqli_query($connect, "INSERT INTO `cinema` (`cinema_id` , `cinema_date`, `cinema_time`, `cinema_title`, `cinema_title_data`, `cinema_place`) VALUES (NULL, '$cinema_date', '$cinema_time', '$cinema_title', '$cinema_title_data', '$cinema_place')");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/cinema/cinema-page-admin.php');

?>


