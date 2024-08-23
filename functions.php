<?php
// подключение функции дата время
date_default_timezone_set('UTC');

// функция отправки информации в файл ZAKAZ.json 
if(isset($_REQUEST['submit'])){
	$data = "";
	$filename = "./admin/zakaz.json";
	if(is_file($filename)){
		$data = file_get_contents($filename);
	}

$json_arr = json_decode($data, true);
//информация котороя будет отправлена в файл json
// отправлен будет массив json_array заполненный необходимой информацией
$json_arr[] = array(
	//номер комнаты который был задан при входе в кабинет (поле заполнения "номер комнаты")
	"name" => $_COOKIE['name'],
	//дата
	"date" => date("Y-m-d H:i:s"),
	//выбор чеков где подразумевалось выбор еды
	"food" => $_REQUEST['food-selection']
);

file_put_contents($filename, json_encode($json_arr, JSON_UNESCAPED_UNICODE));

header("Location: http://sanatorii-romashka/");

}



// для администратора

/*
function getMenuDay($day)
{
// вытаскиваем из файла JSON в переменную
$DATA = file_get_contents('../admin/zakaz.json');
// превращаем из строки в массив с обьектами
$_OBJ = json_decode($DATA, true);
	$mass_food = [];
	foreach($_OBJ as $obj) {
		$new_date = substr($obj["date"], 0, 10); 
		if($day == $new_date) {
			array_push($mass_food, $obj["breakfast"], $obj["dinner"], $obj["lunch"]);
		}
	}

	// функция убирает подмассивы и делает один массив
	array_walk_recursive($mass_food, function($mass_food) use (&$mass_food1) { $mass_food1[] = $mass_food; });

	$result = array_count_values( $mass_food1 );

	return $result;
}

*/
