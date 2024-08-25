<?php 

    require_once "connect.php";

    $date = $_POST["date"];
    $time = $_POST["time"];
    $title = $_POST["title"];
    $title_data = $_POST["title_data"];
    $place = $_POST["place"];

    mysqli_query($connect, "INSERT INTO `cinema` (`id` , `date`, `time`, `title`, `title_data`, `place`) VALUES (NULL, '$date', '$time', '$title', '$title_data', '$place')");

    header('Location: http://sanatorii-romashka/admin/admin.php');

?>


