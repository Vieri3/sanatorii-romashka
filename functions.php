<?php
// Constants
define("CONFIG", parse_ini_file('config.ini'));
define("DOMAIN_NAME", $_SERVER["SERVER_NAME"]);


function raw($data){
    print("<pre>" . print_r($data, true) . "</pre>");
}


function getDBconn(){
    // Get db config
    $db_name = CONFIG['db_name'];
    $db_user = CONFIG['db_user'];
    $db_pass = CONFIG['db_pass'];
    $db_host = CONFIG['db_host'];
    // Create connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Ошибка подключения базы данных: " . $conn->connect_error);
    }
    return $conn;
}


function selectDBdata($sql){
    $conn = getDBConn();
    $rows = $conn->query($sql);
    $result = [];
    if ( $rows->num_rows > 0 ) {
        while( $row = $rows->fetch_assoc() ) {
            $result[] = $row;
        }
    }
    $conn->close();
    return $result;
}


// function insertDBdata($sql){
//     $conn = getDBconn();
//     if ( mysqli_query( $conn, $sql ) ) {
//         $result = 1;
//     } else {
//         $result = 0;
//     }
//     mysqli_close($conn);
//     return $result;
// }


function prepareInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function isUserInDB($name, $password){
    // password
	// кешируемый пароль пользователя 
	$salt = CONFIG['db_salt'];
	$password = md5($salt . $password);
    $name = $name;
	// запрос в базу данных
	$sql = "SELECT `id` FROM `users` WHERE `name`='" . $name . "' AND `password`='" . $password ."'";
    $rows = selectDBdata($sql);
	// проверка авторизации
	if( count( $rows ) !== 0 ) return true;
    return false;
}



?>