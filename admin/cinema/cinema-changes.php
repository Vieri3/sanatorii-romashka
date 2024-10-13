<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"] . "/functions.php";

    $cinema_id = $_POST["cinema_id"];
    $cinema_date = $_POST["cinema_date"];
    $cinema_time = $_POST["cinema_time"];
    $cinema_title = $_POST["cinema_title"];
    $cinema_title_data = $_POST["cinema_title_data"];
    $cinema_place = $_POST["cinema_place"];
   
    updateDBdata("UPDATE `cinema` SET `cinema_date` = '$cinema_date', `cinema_time` = '$cinema_time', `cinema_title` = '$cinema_title', `cinema_title_data` = '$cinema_title_data', `cinema_place` = '$cinema_place' WHERE `cinema` . `cinema_id` =  '$cinema_id' ");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/cinema/cinema-page-admin.php');

?>