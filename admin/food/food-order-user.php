<?php

require_once $_SERVER["DOCUMENT_ROOT"] .  "/admin/connect.php";

$food_name = $_COOKIE['name']; 
$food_date = date("Y-m-d");
$food_time = date("H:i:s");
$food_mass = $_POST["food-selection"];
$food_str = implode(", ", $food_mass);


mysqli_query($connect, "INSERT INTO `food` (`food_id` , `food_name`, `food_date`, `food_time`, `food_meal`) VALUES (NULL, '$food_name', '$food_date', '$food_time', '$food_str')");

header('Location: /');


?>