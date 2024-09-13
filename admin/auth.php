<?php
	require_once '../functions.php';
	
	$name 		= $_POST['name'];
	$password	= $_POST['password'];
	$email 		= $_POST['email'];
	
	$isAuth = $email == NULL;

	$name = prepareInput($name);
	$password = prepareInput($password);
	$email = prepareInput($email);
	
	$responseMsg = '';

	// Проверяем имя пользователя
	if($name == '')					
		$responseMsg .= '- Имя пользователя не можеть быть пустым<br>';
	else if( strlen( $name ) < 2 )
		$responseMsg .= '- Длина имени пользователя не может быть менее 2 символов!<br>';
	
	// Проверяем пароль
	if($password == '') 
		$responseMsg .= '- Необходимо ввести пароль!<br>'; 
	else if( strlen( $password ) < 4 )
		$responseMsg .= '- Пароль должен содержать мининмум 4 символа!<br>';
	
	// Если страница регистрации, то проверяем также email
	if(false == $isAuth){
		if($email == '') 
			$responseMsg .= '- Email необходим для регистрации!<br>'; 
		else if( strlen( $email ) < 10 )
			$responseMsg .= '- Email должен содержать мининмум 10 символов!<br>';
		else if( str_contains( $email, '@' ) )
			$responseMsg .= '- Email должен содержать символ - "@"!';
	}

	// Если данные со страницы авторизации и если сообщения об ошибке пусто то проверяем пользователя в БД
	if($isAuth && $responseMsg == '' && false == isUserInDB($name, $password)){
		$responseMsg = "Такого пользователя не существует!";
	}

	// if(false == $isAuth && $response == ''){
	// 	insertDBdata('');
	// }

	$responseStatus = $responseMsg == '' ? 1 : 0;

	$response = [
		'status' 	=> $responseStatus,
		'message'	=> $responseMsg,
		'userName'	=> $name,
	];


	// Переводим массив php -> json чтобы в результат можно было читать в script.js
	echo json_encode($response, JSON_UNESCAPED_UNICODE);
	

	