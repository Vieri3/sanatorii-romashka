<?php
    require_once $_SERVER["DOCUMENT_ROOT"] .  "/functions.php";
    $news_id = $_GET["id"];
    $singleNews = selectDBdata("SELECT * FROM `news` WHERE `news_id` = $news_id")[0];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Изменение новостей</title>
</head>

<body>

    <ul class="breadcrumb">
        <li><a href="http://<?php echo $_SERVER["SERVER_NAME"] ?>/admin/admin.php">AДМИН</a></li>
        <li><a href="http://<?php echo $_SERVER["SERVER_NAME"] ?>/admin/news/news-page-admin.php">Редактор новостей</a>
        </li>
        <li>Изменить новость</li>
    </ul>

    <h2>Изменить данные новостей</h2>
    <form action="news-changes.php" method="post">
        <input type="hidden" name="news_id" value="<?php echo $singleNews['news_id'] ?>">
        <p>date</p>
        <input type="text" name="news_date" placeholder="YYYY-MM-DD" value="<?php echo $singleNews['news_date']?>">
        <p>news text</p>
        <textarea name="news_text"><?php echo $singleNews['news_text']?></textarea>
        <p>news color</p>
        <input type="text" name="news_color" placeholder="color" value="<?php echo $singleNews['news_color']?>">
        <button type="submit">
            Изменить
        </button>
    </form>

</body>

</html>