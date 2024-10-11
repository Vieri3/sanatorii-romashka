<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/connect.php"; ?>

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
        <?php foreach($food as $item) { ?>
        <tr>
            <td><?php echo  $item[0] ?></td>
            <td><?php echo  $item[1] ?></td>
            <td><?php echo  $item[2] ?></td>
            <td><?php echo  $item[3] ?></td>
            <td><?php echo  $item[4] ?></td>
        </tr>
        <?php }; ?>
    </table>
</body>

</html>