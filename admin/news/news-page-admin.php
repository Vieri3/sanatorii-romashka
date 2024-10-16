<?php
    require_once $_SERVER["DOCUMENT_ROOT"] .  "/functions.php";
    $news = selectDBdata("SELECT * FROM `news`");    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>ADMIN-news</title>
</head>

<body>

    <ul class="breadcrumb">
        <li><a href="http://<?php echo $_SERVER["SERVER_NAME"] ?>/admin/admin.php">AДМИН</a></li>
        <li>Редактор новостей</li>
    </ul>

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
        <?php foreach($news as $newsItem) { ?>
        <tr>
            <td><?php echo $newsItem['news_id'] ?></td>
            <td><?php echo $newsItem['news_date'] ?></td>
            <td><?php echo $newsItem['news_text'] ?></td>
            <td><?php echo $newsItem['news_color'] ?></td>
            <td><a href="news-page-changes.php?id=<?php echo $newsItem['news_id']?>">Изменить</a></td>
            <td><a href="news-del.php?id=<?php echo $newsItem['news_id']?>" class="table-link-del">Удалить</a></td>
        </tr>
        <?php }; ?>
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
        <p>Single news date</p>
        <input type="text" name="news_date" placeholder="YYYY-MM-DD">
        <p>Single news text</p>
        <textarea name="news_text"></textarea>
        <p>Single news color</p>
        <input type="text" name="news_color">
        <button type="submit">
            Добавить
        </button>
    </form>
</body>

</html>