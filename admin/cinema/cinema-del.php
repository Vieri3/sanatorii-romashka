<?php

    require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/connect.php";

    $cinema_id = $_GET["id"];

    mysqli_query($connect, "DELETE FROM `cinema` WHERE `cinema`.`cinema_id` = '$cinema_id'");

    header('Location: http://sanatorii-romashka/admin/cinema/cinema-page-admin.php');

?>