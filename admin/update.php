<?
    require_once "connect.php";
    $cinema_id = $_GET["id"];
    $cinema = mysqli_query($connect, "SELECT * FROM `cinema` WHERE `id` = $cinema_id");
    $cinema = mysqli_fetch_assoc($cinema); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Изменение фильма</title>
</head>
<body>

    <h2>Изменить данные</h2>
        <form action="add-cinema.php" method="post">
            <input type="hidden" name="id" value="<?=$cinema['id'] ?>">
			<p>date</p>
			<input type="text" name="date" placeholder="YYYY-MM-DD" value="<?=$cinema['date']?>">
			<p>time</p>
			<input type="text" name="time" placeholder="HH:MM:SS" value="<?=$cinema['time']?>">
			<p>title</p>
			<input type="text" name="title" value="<?=$cinema['title']?>">
            <p>title_data</p>
			<input type="text" name="title_data" value="<?=$cinema['title_data']?>">
			<p>place</p>
			<textarea name="place"><?=$cinema['place']?></textarea>
			<button type="submit">Изменить</button>
		</form>
    
</body>
</html>

