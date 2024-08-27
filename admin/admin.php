<?
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/admin.css">
	<title>ADMIN</title>
</head>
<body>

	<h2>Таблица фильмов</h2>
		<table>
			<tr>
				<th>id</th>
				<th>date</th>
				<th>time</th>
				<th>title</th>
				<th>title_data</th>
				<th>place</th>
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
					<td><a href="update.php?id=<?=$item[0]?>">Изменить</a></td>
					<td><a href="del-cinema.php?id=<?=$item[0]?>">Удалить</a></td>
				</tr>
			<? }; ?>
		</table>

	<h2>Добавить новые фильмов</h2>
		<form action="add-cinema.php" method="post">
			<p>date</p>
			<input type="text" name="date" placeholder="YYYY-MM-DD">
			<p>time</p>
			<input type="text" name="time" placeholder="HH:MM:SS">
			<p>title</p>
			<input type="text" name="title">
			<p>title_data</p>
			<input type="text" name="title_data">
			<p>place</p>
			<textarea name="place">0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0</textarea>
			<button type="submit">Добавить</button>
		</form>

		<h2>Таблица еды</h2>
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

</body>
</html>