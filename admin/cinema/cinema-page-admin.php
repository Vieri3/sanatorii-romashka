<?php  require_once "../connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/admin.css">
	<title>ADMIN-cinema</title>
</head>
    <body>

    <ul class="breadcrumb">
        <li><a href="http://sanatorii-romashka/admin/admin.php">AДМИН</a></li>
        <li>Редактор фильмов</li>
    </ul>

        <h2>Таблица фильмов</h2>
            <table>
                <tr>
                    <th>cinema id</th>
                    <th>cinema date</th>
                    <th>cinema time</th>
                    <th>cinema title</th>
                    <th>cinema title data</th>
                    <th>cinema place</th>
                    <th>&#9998;</th>
                    <th>&#10006;</th>
                </tr>
                <? foreach($cinema as $item) { ?>
                    <tr>
                        <td><?=$item[0] ?></td>
                        <td><?=$item[1] ?></td>
                        <td><?=$item[2] ?></td>
                        <td><?=$item[3] ?></td>
                        <td><?=$item[4] ?></td>
                        <td><?=$item[5] ?></td>
                        <td><a href="cinema-page-changes.php?id=<?=$item[0]?>">Изменить</a></td>
                        <td><a class="table-link-del" href="cinema-del.php?id=<?=$item[0]?>">Удалить</a></td>
                    </tr>
                <? }; ?>
            </table>

        <h2>Добавить новые фильмов</h2>

            <form action="cinema-add.php" method="post">
                <p>cinema date</p>
                <input type="text" name="cinema_date" placeholder="YYYY-MM-DD">
                <p>cinema time</p>
                <input type="text" name="cinema_time" placeholder="HH:MM:SS">
                <p>cinema title</p>
                <input type="text" name="cinema_title">
                <p>cinema title data</p>
                <input type="text" name="cinema_title_data">
                <p>cinema place</p>
                <textarea name="cinema_place">0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0</textarea>
                <button type="submit">Добавить</button>
            </form>
        
    </body>
</html>