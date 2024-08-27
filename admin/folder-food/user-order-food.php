<?php

require_once "../connect.php";

$name = $_COOKIE['name']; 
$date = date("Y-m-d");
$time = date("H:i:s");
$food_mass = $_POST["food-selection"];
$food_str = implode(", ", $food_mass);


mysqli_query($connect, "INSERT INTO `meal` (`id` , `name`, `date`, `time`, `meal`) VALUES (NULL, '$name', '$date', '$time', '$food_str')");

header('Location: /');


?>