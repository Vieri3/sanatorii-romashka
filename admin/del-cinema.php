<?php

    require_once "connect.php";

    $id = $_GET["id"];

    mysqli_query($connect, "DELETE FROM `cinema` WHERE `cinema`.`id` = '$id'");

    header('Location: http://sanatorii-romashka/admin/admin.php');

?>