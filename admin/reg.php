<?php
	// trim убирает пробелы до и после слов
	// filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS --> ФИЛЬТР убирающий все специальные знаки 
	$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
	$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
	$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
	
	
	if(strlen($name) < 2){
		echo "Name ERROR!!!";
		exit;
	};
	if(strlen($email) < 4 && str_contains($email, '@')){
		echo "Email ERROR!!!";
		exit;
	};
	if(strlen($password) < 4){
		echo "Password ERROR!!!";
		exit;
	}
	
	//password
	// кешируем пароль пользователя 
	
	$salt = 'sgn>?:"?{^&()*(^)^&*FGNHG#';
	$password = md5($salt . $password);
	
	// DB 
	$pdo = new PDO('mysql:host=localhost;dbname=san_rom;port=3306', 'root', '');
	
	//INSERT
	$sql = "INSERT INTO users(`name`, `email`, `password`) VALUES(?,?,?)";
	$query = $pdo->prepare($sql);
	$query->execute([$name, $email, $password]);
	
	header('Location: /');
	
	
	
	