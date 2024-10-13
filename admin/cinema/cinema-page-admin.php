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
            <th>cinema id</th>
            <th>cinema date</th>
            <th>cinema time</th>
            <th>cinema title</th>
            <th>cinema title data</th>
            <th>cinema place</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php foreach($cinema as $item) { ?>
        <tr>
            <td><?php echo $item[0] ?></td>
            <td><?php echo $item[1] ?></td>
            <td><?php echo $item[2] ?></td>
            <td><?php echo $item[3] ?></td>
            <td><?php echo $item[4] ?></td>
            <td><?php echo $item[5] ?></td>
            <td><a href="cinema-page-changes.php?id=<?php echo $item[0] ?>">Изменить</a></td>
            <td><a class="table-link-del" href="cinema-del.php?id=<?php echo $item[0] ?>">Удалить</a></td>
        </tr>
        <?php }; ?>
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
        <textarea
            name="cinema_place">0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0</textarea>
        <button type="submit">Добавить</button>
    </form>

</body>

</html>