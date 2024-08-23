<?php
	$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
	$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

	if(strlen($name) < 2){
		echo "Name ERROR!!!";
		exit;
	}
	
	if(strlen($password) < 4){
		echo "Password ERROR!!!";
		exit;
	}
	
	//password
	// кешируемый пароль пользователя 
	$salt = 'sgn>?:"?{^&()*(^)^&*FGNHG#';
	$password = md5($salt . $password);
	
	// DB 
	$pdo = new PDO('mysql:host=localhost;dbname=san_rom;port=3306', 'root', '');
	
	// запрос в базу данных
	$sql = 'SELECT id FROM users WHERE name = ? AND password = ?';
	
	// подготовка 
	$query = $pdo->prepare($sql);
	$query->execute([$name, $password]);
	
	// проверка авторизации
	if($query->rowCount() == 0) {
		echo "Такого пользователя не существует!";
	}
	else{
		//установим куки
		setcookie('name', $name, time() + 60, "/"); 
		header('Location: /user.php');
	}
	

	