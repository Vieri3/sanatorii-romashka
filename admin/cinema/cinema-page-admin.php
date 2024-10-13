<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/functions.php";
    $movies = selectDBdata("SELECT * FROM `cinema`")
?>

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
        <li><a href="http://<?php echo $_SERVER["SERVER_NAME"]; ?>/admin/admin.php">AДМИН</a></li>
        <li>Редактор фильмов</li>
    </ul>

    <h2>Таблица фильмов</h2>
    <table>
        <tr>
            <th>Movie id</th>
            <th>Movie date</th>
            <th>Movie time</th>
            <th>Movie title</th>
            <th>Movie title data</th>
            <th>Movie place</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php foreach($movies as $movie) { ?>
        <tr>
            <td><?php echo $movie['cinema_id'] ?></td>
            <td><?php echo $movie['cinema_date'] ?></td>
            <td><?php echo $movie['cinema_time'] ?></td>
            <td><?php echo $movie['cinema_title'] ?></td>
            <td><?php echo $movie['cinema_title_data'] ?></td>
            <td><?php echo $movie['cinema_place'] ?></td>
            <td><a href="cinema-page-changes.php?id=<?php echo $movie['cinema_id'] ?>">Изменить</a></td>
            <td><a class="table-link-del" href="cinema-del.php?id=<?php echo $movie['cinema_id'] ?>">Удалить</a></td>
        </tr>
        <?php }; ?>
    </table>

    <h2>Добавить новые фильмов</h2>

    <form action="cinema-add.php" method="post">
        <p>Movie date</p>
        <input type="text" name="cinema_date" placeholder="YYYY-MM-DD">
        <p>Movie time</p>
        <input type="text" name="cinema_time" placeholder="HH:MM:SS">
        <p>Movie title</p>
        <input type="text" name="cinema_title">
        <p>Movie title data</p>
        <input type="text" name="cinema_title_data">
        <p>Movie place</p>
        <textarea
            name="cinema_place">0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0</textarea>
        <button type="submit">Добавить</button>
    </form>

</body>

</html>