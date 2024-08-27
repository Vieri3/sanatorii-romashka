<?php require_once "../connect.php"; ?>

<?php

    $id = $_POST["id"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $title = $_POST["title"];
    $title_data = $_POST["title_data"];
    $place = $_POST["place"];
   
    mysqli_query($connect, "UPDATE `cinema` SET `date` = '$date', `time` = '$time', `title` = '$title', `title_data` = '$title_data', `place` = '$place' WHERE `cinema` . `id` =  '$id' ");

    header("Location: http://sanatorii-romashka/admin/folder-cinema/pass-code.php");

?>