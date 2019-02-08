<?php
 $host = 'localhost'; 
    $user = 'root';
    $pass = '1140'; // Установленный вами пароль пользователю
    $db_name = 'fuel';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
    

    // Ругаемся, если соединение установить не удалось
    if (!$link) {
      echo 'connect fail. Error #: ' . mysqli_connect_errno() . ', err: ' . mysqli_connect_error();
      exit;
    };
?>
