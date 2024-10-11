<?php
    require_once $_SERVER["DOCUMENT_ROOT"] .  "/admin/connect.php";
    $news_id_get = $_GET["id"];
    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `news_id` = $news_id_get");
    $news = mysqli_fetch_assoc($news); 
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
        <li><a href="http://sanatorii-romashka/admin/admin.php">AДМИН</a></li>
        <li><a href="http://sanatorii-romashka/admin/news/news-page-admin.php">Редактор новостей</a></li>
        <li>Изменить новость</li>
    </ul>

    <h2>Изменить данные новостей</h2>
        <form action="news-changes.php" method="post">
                <input type="hidden" name="news_id" value="<?=$news['news_id'] ?>">
			<p>date</p>
			    <input type="text" name="news_date" placeholder="YYYY-MM-DD" value="<?=$news['news_date']?>">
            <p>news text</p>
			    <textarea name="news_text"><?=$news['news_text']?></textarea>
			<p>news color</p>
			    <input type="text" name="news_color" placeholder="color" value="<?=$news['news_color']?>">
            <button type="submit">
                Изменить
            </button>
		</form>
    
</body>
</html>
