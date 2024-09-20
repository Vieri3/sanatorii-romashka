<?php
	require '../functions.php';
	
	$name 		= $_POST['name'];
	$password	= $_POST['password'];
	$email 		= isset($_POST['email']) ? $_POST['email'] : false;
	
	// Если данные email регистрации отсутствуют, значит данные поступают со страницы авторизации
	$isRegistrationPage = $email !== false;

	// Приготавливаем данные формы
	$name		= prepareInput($name);
	$password	= prepareInput($password);
	$email		= prepareInput($email);
	
	// Сообщение при неудачной проверки
	$responseMsg = '';

	// Проверяем имя пользователя
	if($name == '')					
		$responseMsg .= '- Имя пользователя не может быть пустым<br>';
	else if( strlen( $name ) < 2 )
		$responseMsg .= '- Имя пользователя не может быть менее 2 символов!<br>';
	
	// Проверяем пароль
	if($password == '') 
		$responseMsg .= '- Пароль необходим для регистрации!<br>'; 
	else if( strlen( $password ) < 4 )
		$responseMsg .= '- Пароль должен содержать мининмум 4 символа!<br>';
	
	// Если страница регистрации, то проверяем email
	if($isRegistrationPage){
		
		$pos_dog = strpos($email, "@");
		$name_server = substr( strstr( $email, "@" ), 1 );                  
		$len_name_server = strlen($name_server); 
		$check_point = strpos($name_server, ".");   

		if($email == '') 
			$responseMsg .= '- Email необходим для регистрации!<br>'; 
		else if( !$pos_dog )
			$responseMsg .= '- Email должен содержать символ - "@"!<br>';
		else if( $pos_dog < 4 )
			$responseMsg .= '- Email должен содержать больше символов в имени пользователя (до знака @) не менее 4-x!<br>';
			// не совсем корректное уловие. Тут длинна после знака не играет роли. Важно чтобы после знака до точки как минимум 2 символа и посде точки минимум два символа. Ну и сама точка нужна
		else if( $len_name_server < 5)
			$responseMsg .= '- Email должен содержать больше символов в имени сервера (после знака @) не менее 5-ти!<br>';
		else if( $check_point === false )
			$responseMsg .= '- Email должен содержать в имени сервера разделяющую точку (mail.ru, gmail.com)<br>';
	}

	// Если данные со страницы авторизации и если сообщения об ошибке нет, то проверяем пользователя в БД
	if(false == $isRegistrationPage && $responseMsg == '' && false == isUserInDB($name, $password)){
		$responseMsg = 'Такого пользователя не существует!';
	} else {
		$userName = $name;
	}

	// Если страница регистрации нового пользователя и форма прошла проверку, тогда вызываем функцию для записи нового пользователя и передаем ей данные нового пользователя
	if($isRegistrationPage && $responseMsg == ''){
		// Если функции не удалось добавить нового пользователя в БД то добавить сообщение об ошибке
		if(false == addNewUser($name, $email, $password)){
			$responseMsg = 'Неудалось зарегистрировать нового пользователя!<br>Попробуй еще раз!';
		};
	}

	$responseStatus = $responseMsg == '' ? 1 : 0;

	$response = [
		'status' => $responseStatus,
		'message'=> $responseMsg,
		'userName'	 => $userName ?: '',
	];

	// Переводим массив php -> json чтобы в результат можно было читать в script.js
	echo json_encode($response, JSON_UNESCAPED_UNICODE);