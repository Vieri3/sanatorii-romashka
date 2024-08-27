<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/admin.css">
	<title>ADMIN-food</title>
</head>
    <body>

        <h2>Таблица заказов еды клиентов гостинницы</h2>
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>date</th>
                    <th>time</th>
                    <th>meal</th>
                </tr>
                <? foreach($meal as $item) { ?>
                    <tr>
                        <td><?=$item[0] ?></td>
                        <td><?=$item[1] ?></td>
                        <td><?=$item[2] ?></td>
                        <td><?=$item[3] ?></td>
                        <td><?=$item[4] ?></td>
                    </tr>
                <? }; ?>
            </table>

        <h2>Таблица-меню еды в гостинницы</h2>
            <p>редактируемая таблица добавления изменения меню</p>


    </body>
</html>