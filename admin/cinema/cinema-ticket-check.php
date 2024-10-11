<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/connect.php";

     $cinema_place_mass = $_POST["pl"];
     $cinema_id = $cinema_place_mass[50];
     $cinema_places = array_slice($cinema_place_mass, 0, 50);
     $cinema_place_str = implode(",", $cinema_places);

    mysqli_query($connect, "UPDATE `cinema` SET `cinema_place` = '$cinema_place_str' WHERE `cinema` . `cinema_id` =  '$cinema_id' ");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/cinema/cinema-pass-code.php'); 

?>


