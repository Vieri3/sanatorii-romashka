<?php  require_once "../connect.php"; ?>
<?php
    $cinema_id_get = $_GET["id"];
    $cinema = mysqli_query($connect, "SELECT * FROM `cinema` WHERE `cinema_id` = '$cinema_id_get'");
    $cinema = mysqli_fetch_assoc($cinema); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Изменение фильма</title>
</head>
<body>

    <?php include "../admin.php" ?>

    <h2>Изменить данные</h2>
        <form action="cinema-changes.php" method="post">
            <input type="hidden" name="cinema_id" value="<?=$cinema['cinema_id'] ?>">
			<p>cinema date</p>
			<input type="text" name="cinema_date" placeholder="YYYY-MM-DD" value="<?=$cinema['cinema_date']?>">
			<p>cinema  time</p>
			<input type="text" name="cinema_time" placeholder="HH:MM:SS" value="<?=$cinema['cinema_time']?>">
			<p>cinema  title</p>
			<input type="text" name="cinema_title" value="<?=$cinema['cinema_title']?>">
            <p>cinema title data</p>
			<input type="text" name="cinema_title_data" value="<?=$cinema['cinema_title_data']?>">
			<p>cinema  place</p>
			<textarea name="cinema_place"><?=$cinema['cinema_place']?></textarea>
			<button type="submit">Изменить</button>
		</form>
    
</body>
</html>

