<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/functions.php";
    $foodList = selectDBdata("SELECT * FROM `food`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>ADMIN-food</title>
</head>

<body>

    <?php include "food-page-admin.php" ?>

    <h2>Таблица (что заказывали клиенты)</h2>
    <table>
        <tr>
            <th>food id</th>
            <th>food name</th>
            <th>food date</th>
            <th>food time</th>
            <th>food meal</th>
        </tr>
        <?php foreach($foodList as $foodItem) { ?>
        <tr>
            <td><?php echo  $foodItem['food_id'] ?></td>
            <td><?php echo  $foodItem['food_name'] ?></td>
            <td><?php echo  $foodItem['food_date'] ?></td>
            <td><?php echo  $foodItem['food_time'] ?></td>
            <td><?php echo  $foodItem['food_meal'] ?></td>
        </tr>
        <?php }; ?>
    </table>
</body>

</html>