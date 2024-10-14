<?php

    require_once $_SERVER["DOCUMENT_ROOT"] . "/functions.php";

    $cinema_id = $_GET["id"];

    deleteDBdata( "DELETE FROM `cinema` WHERE `cinema_id` = '$cinema_id'");

    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/admin/cinema/cinema-page-admin.php');

?>