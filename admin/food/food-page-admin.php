<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Админ-еды</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>

<body>
    <ul class="breadcrumb">
        <li><a href="http://<?php echo $_SERVER["SERVER_NAME"] ?>/admin/admin.php">AДМИН</a></li>
        <li>Админ еды</li>
    </ul>
    <br>
    <a class="btn btn-info" href="food-page-order-user.php">Таблица заказов еды клиентов</a>
    <a class="btn btn-info" href="food-page-editing-menu.php">Редактор меню еды в санатории</a>
    <a class="btn btn-info" href="food-page-order-day.php">Накладная для отправки в столовую</a>
</body>
</html>