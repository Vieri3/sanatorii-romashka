<?php
	require_once '../functions.php';
	
	$name 		= $_POST['name'];
	$password	= $_POST['password'];
	$email 		= isset($_POST['email']) ? $_POST['email'] : NULL;
	
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
	// Для мейл необходима доп. проверка.
	// Длинны строки перед @ - минимум 4 символа, и не могут быть 4 точки и т.п. 
	// Длинны строки после @ - 5 символов с точкой и между ними 2 символа это буквы
	if(false == $isAuth){

		// можно было сделать функцию в файле function.php типа function checkMail()
		
		$pos_dog = strpos($email, "@");   
		$name_server = (explode("@", $email))[1];                  
		$len_name_server = strlen($name_server); 
		$check_point = strpos($name_server, ".");   

		if($email == '') 
			$responseMsg .= '- Email необходим для регистрации!<br>'; 
		else if( strlen( $email ) < 10 )
			$responseMsg .= '- Email должен содержать мининмум 10 символов!<br>';
		else if( str_contains( $email, '@' ) )
			$responseMsg .= '- Email должен содержать символ - "@"!';
		else if($pos_dog < 4)
			$responseMsg .= '- Email должен содержать больше символов в имени пользователя (до знака @) не менее 4-х!';
		else if($len_name_server < 5)
			$responseMsg .= '- Email должен содержать больше символов в имени сервера (после знака @) не менее 5-ти!';
		else if($check_point === false)
			$responseMsg .= '- Email должен содержать в имени сервера разделяющую точку (mail.ru, gmail.com)';
			 
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
	

	