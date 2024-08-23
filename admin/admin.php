<?php
include "../functions.php";
include "cinema-ticket.php"
?>
<!-- страница в разработке 
в планах
1. смотреть заказы на еду проживающего (за все время, по дням, что больше всего заказал). смотреть заказ на определеннуюю дату всех посетителей (сортировка по блюдам, суп -5 порций, водка - 5бут )
2. менять через админку меню по еде!!!
2. в админке менять названия фильмов внося изменения в файл cinema-ticket.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	
</head>
<body>
<h3>Заказ в столовую для приготовления на ...(следующий день)</h3>

<?php foreach($menu as $pos => $el) { ?>
	<p><?php echo  $pos . '---' . $el . 'шт' ?></p>
<?php  } ?>
<p>.....</p>
<button>отправить на печать</button>
<p>.....</p>
<button>отправить в кафе по эл. почте главному повару</button>


</body>
</html>