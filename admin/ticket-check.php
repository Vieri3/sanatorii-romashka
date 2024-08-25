<?php 
     require_once "connect.php";

     $place = $_POST["pl"];
     $id_cinema = $place[50];
     $places = array_slice($place, 0, 50);
     $str_places = implode(",", $places);


     mysqli_query($connect, "UPDATE `cinema` SET `place` = '$str_places' WHERE `cinema` . `id` =  '$id_cinema' ");

     header("Location: http://sanatorii-romashka/user.php"); 


     

?>


