<?php require_once "../connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/admin.css">
	<title>ADMIN-news</title>
</head>
    <body>

    <?php include "../admin.php" ?>
    
        <h2>Таблица новостей</h2>

            <table>
                    <tr>
                        <th>news id</th>
                        <th>news date</th>
                        <th>news text</th>
                        <th>news color</th>
                        <th>&#9998;</th>
                        <th>&#10006;</th>
                    </tr>
                    <? foreach($news as $item) { ?>
                        <tr>
                            <td><?=$item[0] ?></td>
                            <td><?=$item[1] ?></td>
                            <td><?=$item[2] ?></td>
                            <td><?=$item[3] ?></td>
                            <td><a href="news-page-changes.php?id=<?=$item[0]?>">Изменить</a></td>
                            <td><a href="news-del.php?id=<?=$item[0]?>" class="table-link-del">Удалить</a></td>
                        </tr>
                    <? }; ?>
                </table>

                <h2>Добавить новые новости</h2>

                <!-- нажимаешь на див и в поле цвет новости добавляется название цвета-->
                <!--
                        <div>
                            <div>primary</div>
                            <div>secondary</div>
                            <div>success</div>
                            <div>danger</div>
                            <div>warning</div>
                            <div>info</div>
                        </div>
                    -->
                    <form action="news-add.php" method="post">
                        <p>news date</p>
                            <input type="text" name="news_date" placeholder="YYYY-MM-DD">
                        <p>news text</p>
                            <textarea name="news_text"></textarea>
                        <p>news color</p>
                            <input type="text" name="news_color">
                        <button type="submit">
                            Добавить
                        </button>
                    </form>
    </body>
</html>
